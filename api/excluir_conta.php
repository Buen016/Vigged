<?php
/**
 * API para excluir conta do usuário (PCD ou Empresa)
 * Vigged - Plataforma de Inclusão e Oportunidades
 */

require_once '../config/constants.php';
require_once '../config/database.php';
require_once '../config/auth.php';

startSecureSession();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Método não permitido']);
    exit;
}

// Verificar autenticação
if (!isAuthenticated()) {
    http_response_code(401);
    echo json_encode(['success' => false, 'error' => 'Não autenticado']);
    exit;
}

$currentUser = getCurrentUser();
$userType = $_SESSION['user_type'] ?? '';

if (!$currentUser) {
    http_response_code(401);
    echo json_encode(['success' => false, 'error' => 'Usuário não encontrado']);
    exit;
}

try {
    $pdo = getDBConnection();
    if (!$pdo) {
        http_response_code(500);
        echo json_encode(['success' => false, 'error' => 'Erro de conexão com o banco de dados']);
        exit;
    }
    
    // Iniciar transação
    $pdo->beginTransaction();
    
    if ($userType === USER_TYPE_PCD) {
        // Excluir conta PCD
        $userId = $currentUser['id'];
        
        // Buscar arquivos para deletar
        $arquivosParaDeletar = [];
        
        if (!empty($currentUser['foto_perfil'])) {
            $arquivosParaDeletar[] = $currentUser['foto_perfil'];
        }
        if (!empty($currentUser['curriculo_path'])) {
            $arquivosParaDeletar[] = $currentUser['curriculo_path'];
        }
        if (!empty($currentUser['laudo_medico_path'])) {
            $arquivosParaDeletar[] = $currentUser['laudo_medico_path'];
        }
        
        // Excluir notificações relacionadas
        $pdo->exec("DELETE FROM notifications WHERE user_id = $userId");
        
        // Excluir histórico de status de candidaturas
        $pdo->exec("DELETE FROM application_status_history WHERE application_id IN (SELECT id FROM applications WHERE user_id = $userId)");
        
        // As applications serão excluídas automaticamente pelo CASCADE
        // Excluir usuário (isso também excluirá applications pelo CASCADE)
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$userId]);
        
    } elseif ($userType === USER_TYPE_COMPANY) {
        // Excluir conta Empresa
        $companyId = $currentUser['id'];
        
        // Buscar arquivos para deletar
        $arquivosParaDeletar = [];
        
        if (!empty($currentUser['logo_path'])) {
            $arquivosParaDeletar[] = $currentUser['logo_path'];
        }
        if (!empty($currentUser['documento_empresa_path'])) {
            $arquivosParaDeletar[] = $currentUser['documento_empresa_path'];
        }
        
        // Buscar logos de vagas relacionadas (se houver)
        $jobsStmt = $pdo->prepare("SELECT id FROM jobs WHERE company_id = ?");
        $jobsStmt->execute([$companyId]);
        $jobs = $jobsStmt->fetchAll(PDO::FETCH_COLUMN);
        
        // Excluir plan requests relacionados
        $pdo->exec("DELETE FROM plan_requests WHERE company_id = $companyId");
        
        // As jobs serão excluídas automaticamente pelo CASCADE
        // As applications relacionadas às jobs também serão excluídas pelo CASCADE
        // Excluir empresa (isso também excluirá jobs pelo CASCADE)
        $stmt = $pdo->prepare("DELETE FROM companies WHERE id = ?");
        $stmt->execute([$companyId]);
        
    } else {
        $pdo->rollBack();
        http_response_code(403);
        echo json_encode(['success' => false, 'error' => 'Tipo de usuário inválido']);
        exit;
    }
    
    // Deletar arquivos físicos
    foreach ($arquivosParaDeletar as $arquivo) {
        if (!empty($arquivo)) {
            $filePath = strpos($arquivo, '/') === 0 ? substr($arquivo, 1) : $arquivo;
            $fullPath = __DIR__ . '/../' . $filePath;
            if (file_exists($fullPath)) {
                @unlink($fullPath);
            }
        }
    }
    
    // Confirmar transação
    $pdo->commit();
    
    // Limpar sessão
    session_destroy();
    
    echo json_encode([
        'success' => true,
        'message' => 'Conta excluída com sucesso'
    ], JSON_UNESCAPED_UNICODE);
    
} catch (PDOException $e) {
    if (isset($pdo) && $pdo->inTransaction()) {
        $pdo->rollBack();
    }
    error_log("Erro ao excluir conta: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Erro ao excluir conta. Tente novamente mais tarde.']);
} catch (Exception $e) {
    if (isset($pdo) && $pdo->inTransaction()) {
        $pdo->rollBack();
    }
    error_log("Erro ao excluir conta: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Erro ao excluir conta. Tente novamente mais tarde.']);
}
?>

