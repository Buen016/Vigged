<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Esqueceu sua senha - Vigged</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-50">
  <!-- Navigation -->
  <nav class="bg-purple-600 text-white h-16">
    <div class="max-w-7xl mx-auto px-4 h-full flex items-center justify-between">
      <a href="index.php" class="text-2xl font-bold">Vigged</a>
      <div class="hidden md:flex space-x-6">
        <a href="index.php" class="hover:text-purple-200 transition">Início</a>
        <a href="vagas.php" class="hover:text-purple-200 transition">Vagas</a>
        <a href="empresas.php" class="hover:text-purple-200 transition">Empresas</a>
        <a href="sobre-nos.php" class="hover:text-purple-200 transition">Sobre nós</a>
        <a href="contato.php" class="hover:text-purple-200 transition">Contato</a>
      </div>
      <div class="flex space-x-3">
        <a href="login.php" class="px-4 py-2 border border-white rounded-lg hover:bg-white hover:text-purple-600 transition">Login</a>
        <a href="pre-cadastro.php" class="px-4 py-2 bg-white text-purple-600 rounded-lg hover:bg-gray-100 transition">Cadastrar-se</a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="min-h-[calc(100vh-20rem)] flex items-center justify-center py-8 px-4">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
      <h1 class="text-2xl font-bold text-purple-600 text-center mb-1">Esqueceu sua senha?</h1>
      <p class="text-gray-600 text-center text-sm mb-4">Não se preocupe! Digite seu email e enviaremos instruções para redefinir sua senha.</p>
      
      <form id="forgotPasswordForm" class="space-y-3">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
          <input 
            type="email" 
            id="email" 
            name="email" 
            placeholder="Coloque seu endereço de Email" 
            required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"
          >
        </div>

        <div id="messageContainer" class="hidden p-3 rounded-lg"></div>

        <button 
          type="submit" 
          class="w-full bg-purple-600 text-white py-2.5 rounded-lg font-semibold hover:bg-purple-700 transition"
        >
          Enviar instruções
        </button>
      </form>

      <div class="mt-4 text-center">
        <a href="login.php" class="text-purple-600 hover:text-purple-700 font-medium">
          Voltar para o login
        </a>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('forgotPasswordForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const email = document.getElementById('email').value;
      const messageContainer = document.getElementById('messageContainer');
      
      // Check if email exists in localStorage (simulating backend check)
      const users = JSON.parse(localStorage.getItem('users') || '[]');
      const companies = JSON.parse(localStorage.getItem('companies') || '[]');
      
      const userExists = users.some(user => user.email === email) || 
                        companies.some(company => company.email === email);
      
      if (userExists) {
        // Show success message
        messageContainer.className = 'p-3 rounded-lg bg-green-100 text-green-700';
        messageContainer.textContent = 'Instruções de redefinição de senha foram enviadas para seu email!';
        messageContainer.classList.remove('hidden');
        
        // Simulate sending reset email (in real app, this would be a backend call)
        console.log('[v0] Password reset email would be sent to:', email);
        
        // Redirect to login after 3 seconds
        setTimeout(() => {
          window.location.href = 'login.php';
        }, 3000);
      } else {
        // Show error message
        messageContainer.className = 'p-3 rounded-lg bg-red-100 text-red-700';
        messageContainer.textContent = 'Email não encontrado. Verifique o endereço digitado.';
        messageContainer.classList.remove('hidden');
      }
    });
  </script>
</body>
</html>
