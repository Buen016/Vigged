<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - Vigged</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar-link:hover {
            background-color: rgba(124, 58, 237, 0.1);
        }
        .sidebar-link.active {
            background-color: rgba(124, 58, 237, 0.2);
            border-left: 4px solid #7c3aed;
        }
        .stat-card {
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-4px);
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }
        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-gradient-to-r from-purple-600 to-purple-700 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-8">
                    <h1 class="text-2xl font-bold">Vigged Admin</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm">Administrador</span>
                    <button class="bg-white text-purple-600 px-4 py-2 rounded-lg hover:bg-gray-100 transition text-sm font-medium">
                        Sair
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white h-screen shadow-lg sticky top-0">
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="#dashboard" class="sidebar-link active flex items-center space-x-3 p-3 rounded-lg text-gray-700">
                            <i class="fas fa-chart-line w-5"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#usuarios" class="sidebar-link flex items-center space-x-3 p-3 rounded-lg text-gray-700">
                            <i class="fas fa-users w-5"></i>
                            <span>Usuários PCD</span>
                        </a>
                    </li>
                    <li>
                        <a href="#empresas" class="sidebar-link flex items-center space-x-3 p-3 rounded-lg text-gray-700">
                            <i class="fas fa-building w-5"></i>
                            <span>Empresas</span>
                        </a>
                    </li>
                    <li>
                        <a href="#vagas" class="sidebar-link flex items-center space-x-3 p-3 rounded-lg text-gray-700">
                            <i class="fas fa-briefcase w-5"></i>
                            <span>Vagas</span>
                        </a>
                    </li>
                    <li>
                        <a href="#relatorios" class="sidebar-link flex items-center space-x-3 p-3 rounded-lg text-gray-700">
                            <i class="fas fa-file-alt w-5"></i>
                            <span>Relatórios</span>
                        </a>
                    </li>
                    <li>
                        <a href="#configuracoes" class="sidebar-link flex items-center space-x-3 p-3 rounded-lg text-gray-700">
                            <i class="fas fa-cog w-5"></i>
                            <span>Configurações</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <!-- Dashboard Section -->
            <section id="dashboard-section">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Dashboard</h2>
                
                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="stat-card bg-white p-6 rounded-xl shadow-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm mb-1">Total de Usuários</p>
                                <p id="total-users" class="text-3xl font-bold text-purple-600">0</p>
                                <p class="text-green-500 text-xs mt-2">
                                    <i class="fas fa-arrow-up"></i> +12% este mês
                                </p>
                            </div>
                            <div class="bg-purple-100 p-4 rounded-full">
                                <i class="fas fa-users text-purple-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="stat-card bg-white p-6 rounded-xl shadow-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm mb-1">Empresas Ativas</p>
                                <p id="total-companies" class="text-3xl font-bold text-blue-600">0</p>
                                <p class="text-green-500 text-xs mt-2">
                                    <i class="fas fa-arrow-up"></i> +8% este mês
                                </p>
                            </div>
                            <div class="bg-blue-100 p-4 rounded-full">
                                <i class="fas fa-building text-blue-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="stat-card bg-white p-6 rounded-xl shadow-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm mb-1">Vagas Abertas</p>
                                <p class="text-3xl font-bold text-green-600">789</p>
                                <p class="text-green-500 text-xs mt-2">
                                    <i class="fas fa-arrow-up"></i> +15% este mês
                                </p>
                            </div>
                            <div class="bg-green-100 p-4 rounded-full">
                                <i class="fas fa-briefcase text-green-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="stat-card bg-white p-6 rounded-xl shadow-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm mb-1">Candidaturas</p>
                                <p class="text-3xl font-bold text-orange-600">3,421</p>
                                <p class="text-green-500 text-xs mt-2">
                                    <i class="fas fa-arrow-up"></i> +23% este mês
                                </p>
                            </div>
                            <div class="bg-orange-100 p-4 rounded-full">
                                <i class="fas fa-file-alt text-orange-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Cadastros Recentes</h3>
                        <div id="recent-registrations" class="space-y-4">
                            <!-- Will be populated by JavaScript -->
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Vagas Mais Populares</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-800">Desenvolvedor Front-end</p>
                                    <p class="text-sm text-gray-500">Tech Solutions</p>
                                </div>
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">
                                    45 candidatos
                                </span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-800">Analista de Suporte</p>
                                    <p class="text-sm text-gray-500">Inovação Corp</p>
                                </div>
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">
                                    38 candidatos
                                </span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium text-gray-800">Designer UX/UI</p>
                                    <p class="text-sm text-gray-500">Creative Agency</p>
                                </div>
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">
                                    32 candidatos
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Users Section -->
            <section id="usuarios-section" class="hidden">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-3xl font-bold text-gray-800">Usuários PCD</h2>
                    <button onclick="openUserModal()" class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition">
                        <i class="fas fa-plus mr-2"></i>Adicionar Usuário
                    </button>
                </div>

                <!-- Search and Filter -->
                <div class="bg-white p-4 rounded-xl shadow-md mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <input type="text" id="user-search" placeholder="Buscar por nome..." class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <select id="user-disability-filter" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="">Tipo de Deficiência</option>
                            <option value="Deficiência Física">Deficiência Física</option>
                            <option value="Deficiência Visual">Deficiência Visual</option>
                            <option value="Deficiência Auditiva">Deficiência Auditiva</option>
                            <option value="Deficiência Intelectual">Deficiência Intelectual</option>
                        </select>
                        <select id="user-status-filter" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="">Status</option>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                            <option value="Pendente">Pendente</option>
                        </select>
                        <button onclick="filterUsers()" class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition">
                            <i class="fas fa-search mr-2"></i>Buscar
                        </button>
                    </div>
                </div>

                <!-- Users Table -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo de Deficiência</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data de Cadastro</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                            </tr>
                        </thead>
                        <tbody id="users-table-body" class="bg-white divide-y divide-gray-200">
                            <!-- Will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="flex items-center justify-between mt-6">
                    <p class="text-sm text-gray-700">
                        Mostrando <span id="users-showing-start">0</span> a <span id="users-showing-end">0</span> de <span id="users-total">0</span> resultados
                    </p>
                    <div id="users-pagination" class="flex space-x-2">
                        <!-- Will be populated by JavaScript -->
                    </div>
                </div>
            </section>

            <!-- Companies Section -->
            <section id="empresas-section" class="hidden">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-3xl font-bold text-gray-800">Empresas Cadastradas</h2>
                    <button onclick="openCompanyModal()" class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition">
                        <i class="fas fa-plus mr-2"></i>Adicionar Empresa
                    </button>
                </div>

                <!-- Search and Filter -->
                <div class="bg-white p-4 rounded-xl shadow-md mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <input type="text" id="company-search" placeholder="Buscar por nome..." class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <select id="company-sector-filter" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="">Setor</option>
                            <option value="Tecnologia">Tecnologia</option>
                            <option value="Saúde">Saúde</option>
                            <option value="Educação">Educação</option>
                            <option value="Varejo">Varejo</option>
                            <option value="Consultoria">Consultoria</option>
                            <option value="Marketing">Marketing</option>
                        </select>
                        <select id="company-status-filter" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="">Status</option>
                            <option value="Ativa">Ativa</option>
                            <option value="Inativa">Inativa</option>
                            <option value="Pendente">Pendente</option>
                        </select>
                        <button onclick="filterCompanies()" class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition">
                            <i class="fas fa-search mr-2"></i>Buscar
                        </button>
                    </div>
                </div>

                <!-- Companies Table -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Empresa</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CNPJ</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Setor</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vagas Ativas</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data de Cadastro</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                            </tr>
                        </thead>
                        <tbody id="companies-table-body" class="bg-white divide-y divide-gray-200">
                            <!-- Will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="flex items-center justify-between mt-6">
                    <p class="text-sm text-gray-700">
                        Mostrando <span id="companies-showing-start">0</span> a <span id="companies-showing-end">0</span> de <span id="companies-total">0</span> resultados
                    </p>
                    <div id="companies-pagination" class="flex space-x-2">
                        <!-- Will be populated by JavaScript -->
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- User Modal -->
    <div id="user-modal" class="modal">
        <div class="bg-white rounded-xl shadow-2xl p-8 max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800" id="user-modal-title">Adicionar Usuário</h3>
                <button onclick="closeUserModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <form id="user-form" onsubmit="saveUser(event)">
                <input type="hidden" id="user-id">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nome Completo *</label>
                        <input type="text" id="user-name" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                        <input type="email" id="user-email" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Telefone</label>
                        <input type="tel" id="user-phone" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tipo de Deficiência *</label>
                        <select id="user-disability" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="">Selecione...</option>
                            <option value="Deficiência Física">Deficiência Física</option>
                            <option value="Deficiência Visual">Deficiência Visual</option>
                            <option value="Deficiência Auditiva">Deficiência Auditiva</option>
                            <option value="Deficiência Intelectual">Deficiência Intelectual</option>
                            <option value="Deficiência Múltipla">Deficiência Múltipla</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status *</label>
                        <select id="user-status" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                            <option value="Pendente">Pendente</option>
                        </select>
                    </div>
                </div>
                <div class="flex space-x-4 mt-6">
                    <button type="button" onclick="closeUserModal()" class="flex-1 bg-gray-200 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-300 transition">
                        Cancelar
                    </button>
                    <button type="submit" class="flex-1 bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Company Modal -->
    <div id="company-modal" class="modal">
        <div class="bg-white rounded-xl shadow-2xl p-8 max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800" id="company-modal-title">Adicionar Empresa</h3>
                <button onclick="closeCompanyModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <form id="company-form" onsubmit="saveCompany(event)">
                <input type="hidden" id="company-id">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nome da Empresa *</label>
                        <input type="text" id="company-name" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">CNPJ *</label>
                        <input type="text" id="company-cnpj" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                        <input type="email" id="company-email" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Setor *</label>
                        <select id="company-sector" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="">Selecione...</option>
                            <option value="Tecnologia">Tecnologia</option>
                            <option value="Saúde">Saúde</option>
                            <option value="Educação">Educação</option>
                            <option value="Varejo">Varejo</option>
                            <option value="Consultoria">Consultoria</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Financeiro">Financeiro</option>
                            <option value="Indústria">Indústria</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Vagas Ativas</label>
                        <input type="number" id="company-jobs" min="0" value="0" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status *</label>
                        <select id="company-status" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="Ativa">Ativa</option>
                            <option value="Inativa">Inativa</option>
                            <option value="Pendente">Pendente</option>
                        </select>
                    </div>
                </div>
                <div class="flex space-x-4 mt-6">
                    <button type="button" onclick="closeCompanyModal()" class="flex-1 bg-gray-200 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-300 transition">
                        Cancelar
                    </button>
                    <button type="submit" class="flex-1 bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        
        // Initialize data storage
        let users = JSON.parse(localStorage.getItem('vigged_users')) || [];
        let companies = JSON.parse(localStorage.getItem('vigged_companies')) || [];
        let currentUserPage = 1;
        let currentCompanyPage = 1;
        const itemsPerPage = 10;

        // Initialize with sample data if empty
        if (users.length === 0) {
            users = [
                {
                    id: 1,
                    name: 'João Silva',
                    email: 'joao.silva@email.com',
                    phone: '(11) 98765-4321',
                    disability: 'Deficiência Física',
                    status: 'Ativo',
                    date: '15/01/2025'
                },
                {
                    id: 2,
                    name: 'Maria Santos',
                    email: 'maria.santos@email.com',
                    phone: '(11) 98765-4322',
                    disability: 'Deficiência Visual',
                    status: 'Ativo',
                    date: '14/01/2025'
                },
                {
                    id: 3,
                    name: 'Pedro Costa',
                    email: 'pedro.costa@email.com',
                    phone: '(11) 98765-4323',
                    disability: 'Deficiência Auditiva',
                    status: 'Pendente',
                    date: '13/01/2025'
                }
            ];
            localStorage.setItem('vigged_users', JSON.stringify(users));
        }

        if (companies.length === 0) {
            companies = [
                {
                    id: 1,
                    name: 'Tech Solutions Ltda',
                    cnpj: '12.345.678/0001-90',
                    email: 'contato@techsolutions.com',
                    sector: 'Tecnologia',
                    jobs: 15,
                    status: 'Ativa',
                    date: '10/01/2025'
                },
                {
                    id: 2,
                    name: 'Inovação Corp',
                    cnpj: '98.765.432/0001-10',
                    email: 'rh@inovacaocorp.com',
                    sector: 'Consultoria',
                    jobs: 8,
                    status: 'Ativa',
                    date: '08/01/2025'
                },
                {
                    id: 3,
                    name: 'Creative Agency',
                    cnpj: '11.222.333/0001-44',
                    email: 'contato@creative.com',
                    sector: 'Marketing',
                    jobs: 12,
                    status: 'Pendente',
                    date: '05/01/2025'
                }
            ];
            localStorage.setItem('vigged_companies', JSON.stringify(companies));
        }

        // Navigation functionality
        document.querySelectorAll('.sidebar-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
                
                document.querySelectorAll('section').forEach(section => section.classList.add('hidden'));
                
                const target = this.getAttribute('href').substring(1);
                if (target === 'dashboard') {
                    document.getElementById('dashboard-section').classList.remove('hidden');
                    updateDashboard();
                } else if (target === 'usuarios') {
                    document.getElementById('usuarios-section').classList.remove('hidden');
                    renderUsers();
                } else if (target === 'empresas') {
                    document.getElementById('empresas-section').classList.remove('hidden');
                    renderCompanies();
                }
            });
        });

        // Update dashboard statistics
        function updateDashboard() {
            document.getElementById('total-users').textContent = users.length;
            document.getElementById('total-companies').textContent = companies.length;
            
            // Update recent registrations
            const recentDiv = document.getElementById('recent-registrations');
            const recentUsers = users.slice(-3).reverse();
            const recentCompanies = companies.slice(-2).reverse();
            
            let html = '';
            recentUsers.forEach(user => {
                html += `
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center space-x-3">
                            <div class="bg-purple-100 p-2 rounded-full">
                                <i class="fas fa-user text-purple-600"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">${user.name}</p>
                                <p class="text-sm text-gray-500">Usuário PCD</p>
                            </div>
                        </div>
                        <span class="text-xs text-gray-500">${user.date}</span>
                    </div>
                `;
            });
            
            recentCompanies.forEach(company => {
                html += `
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center space-x-3">
                            <div class="bg-blue-100 p-2 rounded-full">
                                <i class="fas fa-building text-blue-600"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">${company.name}</p>
                                <p class="text-sm text-gray-500">Empresa</p>
                            </div>
                        </div>
                        <span class="text-xs text-gray-500">${company.date}</span>
                    </div>
                `;
            });
            
            recentDiv.innerHTML = html;
        }

        // User Management Functions
        function renderUsers(filteredUsers = null) {
            const usersToRender = filteredUsers || users;
            const start = (currentUserPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedUsers = usersToRender.slice(start, end);
            
            const tbody = document.getElementById('users-table-body');
            tbody.innerHTML = '';
            
            paginatedUsers.forEach(user => {
                const initials = user.name.split(' ').map(n => n[0]).join('').substring(0, 2);
                const statusClass = user.status === 'Ativo' ? 'bg-green-100 text-green-800' : 
                                   user.status === 'Pendente' ? 'bg-yellow-100 text-yellow-800' : 
                                   'bg-red-100 text-red-800';
                
                tbody.innerHTML += `
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                                    <span class="text-purple-600 font-medium">${initials}</span>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">${user.name}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${user.email}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${user.disability}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${user.date}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full ${statusClass}">
                                ${user.status}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                            <button onclick="viewUser(${user.id})" class="text-blue-600 hover:text-blue-900"><i class="fas fa-eye"></i></button>
                            <button onclick="editUser(${user.id})" class="text-green-600 hover:text-green-900"><i class="fas fa-edit"></i></button>
                            <button onclick="deleteUser(${user.id})" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                `;
            });
            
            // Update pagination info
            document.getElementById('users-showing-start').textContent = start + 1;
            document.getElementById('users-showing-end').textContent = Math.min(end, usersToRender.length);
            document.getElementById('users-total').textContent = usersToRender.length;
            
            renderUserPagination(usersToRender.length);
        }

        function renderUserPagination(totalItems) {
            const totalPages = Math.ceil(totalItems / itemsPerPage);
            const pagination = document.getElementById('users-pagination');
            pagination.innerHTML = '';
            
            // Previous button
            pagination.innerHTML += `
                <button onclick="changeUserPage(${currentUserPage - 1})" 
                        ${currentUserPage === 1 ? 'disabled' : ''} 
                        class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Anterior
                </button>
            `;
            
            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                if (i === 1 || i === totalPages || (i >= currentUserPage - 1 && i <= currentUserPage + 1)) {
                    const activeClass = i === currentUserPage ? 'bg-purple-600 text-white' : 'border border-gray-300 hover:bg-gray-50';
                    pagination.innerHTML += `
                        <button onclick="changeUserPage(${i})" class="px-4 py-2 ${activeClass} rounded-lg">
                            ${i}
                        </button>
                    `;
                } else if (i === currentUserPage - 2 || i === currentUserPage + 2) {
                    pagination.innerHTML += '<span class="px-2">...</span>';
                }
            }
            
            // Next button
            pagination.innerHTML += `
                <button onclick="changeUserPage(${currentUserPage + 1})" 
                        ${currentUserPage === totalPages ? 'disabled' : ''} 
                        class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Próximo
                </button>
            `;
        }

        function changeUserPage(page) {
            const totalPages = Math.ceil(users.length / itemsPerPage);
            if (page >= 1 && page <= totalPages) {
                currentUserPage = page;
                renderUsers();
            }
        }

        function filterUsers() {
            const searchTerm = document.getElementById('user-search').value.toLowerCase();
            const disabilityFilter = document.getElementById('user-disability-filter').value;
            const statusFilter = document.getElementById('user-status-filter').value;
            
            const filtered = users.filter(user => {
                const matchesSearch = user.name.toLowerCase().includes(searchTerm) || 
                                     user.email.toLowerCase().includes(searchTerm);
                const matchesDisability = !disabilityFilter || user.disability === disabilityFilter;
                const matchesStatus = !statusFilter || user.status === statusFilter;
                
                return matchesSearch && matchesDisability && matchesStatus;
            });
            
            currentUserPage = 1;
            renderUsers(filtered);
        }

        // Add real-time search
        document.getElementById('user-search').addEventListener('input', filterUsers);

        function openUserModal(userId = null) {
            const modal = document.getElementById('user-modal');
            const title = document.getElementById('user-modal-title');
            
            if (userId) {
                const user = users.find(u => u.id === userId);
                title.textContent = 'Editar Usuário';
                document.getElementById('user-id').value = user.id;
                document.getElementById('user-name').value = user.name;
                document.getElementById('user-email').value = user.email;
                document.getElementById('user-phone').value = user.phone;
                document.getElementById('user-disability').value = user.disability;
                document.getElementById('user-status').value = user.status;
            } else {
                title.textContent = 'Adicionar Usuário';
                document.getElementById('user-form').reset();
                document.getElementById('user-id').value = '';
            }
            
            modal.classList.add('active');
        }

        function closeUserModal() {
            document.getElementById('user-modal').classList.remove('active');
            document.getElementById('user-form').reset();
        }

        function saveUser(event) {
            event.preventDefault();
            
            const userId = document.getElementById('user-id').value;
            const userData = {
                name: document.getElementById('user-name').value,
                email: document.getElementById('user-email').value,
                phone: document.getElementById('user-phone').value,
                disability: document.getElementById('user-disability').value,
                status: document.getElementById('user-status').value,
                date: new Date().toLocaleDateString('pt-BR')
            };
            
            if (userId) {
                // Edit existing user
                const index = users.findIndex(u => u.id === parseInt(userId));
                users[index] = { ...users[index], ...userData };
            } else {
                // Add new user
                userData.id = users.length > 0 ? Math.max(...users.map(u => u.id)) + 1 : 1;
                users.push(userData);
            }
            
            localStorage.setItem('vigged_users', JSON.stringify(users));
            closeUserModal();
            renderUsers();
            updateDashboard();
        }

        function editUser(userId) {
            openUserModal(userId);
        }

        function viewUser(userId) {
            const user = users.find(u => u.id === userId);
            alert(`Nome: ${user.name}\nEmail: ${user.email}\nTelefone: ${user.phone}\nDeficiência: ${user.disability}\nStatus: ${user.status}\nData: ${user.date}`);
        }

        function deleteUser(userId) {
            if (confirm('Tem certeza que deseja excluir este usuário?')) {
                users = users.filter(u => u.id !== userId);
                localStorage.setItem('vigged_users', JSON.stringify(users));
                renderUsers();
                updateDashboard();
            }
        }

        // Company Management Functions
        function renderCompanies(filteredCompanies = null) {
            const companiesToRender = filteredCompanies || companies;
            const start = (currentCompanyPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedCompanies = companiesToRender.slice(start, end);
            
            const tbody = document.getElementById('companies-table-body');
            tbody.innerHTML = '';
            
            paginatedCompanies.forEach(company => {
                const statusClass = company.status === 'Ativa' ? 'bg-green-100 text-green-800' : 
                                   company.status === 'Pendente' ? 'bg-yellow-100 text-yellow-800' : 
                                   'bg-red-100 text-red-800';
                
                tbody.innerHTML += `
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i class="fas fa-building text-blue-600"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">${company.name}</div>
                                    <div class="text-sm text-gray-500">${company.email}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${company.cnpj}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${company.sector}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${company.jobs}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${company.date}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full ${statusClass}">
                                ${company.status}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                            <button onclick="viewCompany(${company.id})" class="text-blue-600 hover:text-blue-900"><i class="fas fa-eye"></i></button>
                            <button onclick="editCompany(${company.id})" class="text-green-600 hover:text-green-900"><i class="fas fa-edit"></i></button>
                            <button onclick="deleteCompany(${company.id})" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                `;
            });
            
            document.getElementById('companies-showing-start').textContent = start + 1;
            document.getElementById('companies-showing-end').textContent = Math.min(end, companiesToRender.length);
            document.getElementById('companies-total').textContent = companiesToRender.length;
            
            renderCompanyPagination(companiesToRender.length);
        }

        function renderCompanyPagination(totalItems) {
            const totalPages = Math.ceil(totalItems / itemsPerPage);
            const pagination = document.getElementById('companies-pagination');
            pagination.innerHTML = '';
            
            pagination.innerHTML += `
                <button onclick="changeCompanyPage(${currentCompanyPage - 1})" 
                        ${currentCompanyPage === 1 ? 'disabled' : ''} 
                        class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Anterior
                </button>
            `;
            
            for (let i = 1; i <= totalPages; i++) {
                if (i === 1 || i === totalPages || (i >= currentCompanyPage - 1 && i <= currentCompanyPage + 1)) {
                    const activeClass = i === currentCompanyPage ? 'bg-purple-600 text-white' : 'border border-gray-300 hover:bg-gray-50';
                    pagination.innerHTML += `
                        <button onclick="changeCompanyPage(${i})" class="px-4 py-2 ${activeClass} rounded-lg">
                            ${i}
                        </button>
                    `;
                } else if (i === currentCompanyPage - 2 || i === currentCompanyPage + 2) {
                    pagination.innerHTML += '<span class="px-2">...</span>';
                }
            }
            
            pagination.innerHTML += `
                <button onclick="changeCompanyPage(${currentCompanyPage + 1})" 
                        ${currentCompanyPage === totalPages ? 'disabled' : ''} 
                        class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Próximo
                </button>
            `;
        }

        function changeCompanyPage(page) {
            const totalPages = Math.ceil(companies.length / itemsPerPage);
            if (page >= 1 && page <= totalPages) {
                currentCompanyPage = page;
                renderCompanies();
            }
        }

        function filterCompanies() {
            const searchTerm = document.getElementById('company-search').value.toLowerCase();
            const sectorFilter = document.getElementById('company-sector-filter').value;
            const statusFilter = document.getElementById('company-status-filter').value;
            
            const filtered = companies.filter(company => {
                const matchesSearch = company.name.toLowerCase().includes(searchTerm) || 
                                     company.email.toLowerCase().includes(searchTerm);
                const matchesSector = !sectorFilter || company.sector === sectorFilter;
                const matchesStatus = !statusFilter || company.status === statusFilter;
                
                return matchesSearch && matchesSector && matchesStatus;
            });
            
            currentCompanyPage = 1;
            renderCompanies(filtered);
        }

        document.getElementById('company-search').addEventListener('input', filterCompanies);

        function openCompanyModal(companyId = null) {
            const modal = document.getElementById('company-modal');
            const title = document.getElementById('company-modal-title');
            
            if (companyId) {
                const company = companies.find(c => c.id === companyId);
                title.textContent = 'Editar Empresa';
                document.getElementById('company-id').value = company.id;
                document.getElementById('company-name').value = company.name;
                document.getElementById('company-cnpj').value = company.cnpj;
                document.getElementById('company-email').value = company.email;
                document.getElementById('company-sector').value = company.sector;
                document.getElementById('company-jobs').value = company.jobs;
                document.getElementById('company-status').value = company.status;
            } else {
                title.textContent = 'Adicionar Empresa';
                document.getElementById('company-form').reset();
                document.getElementById('company-id').value = '';
            }
            
            modal.classList.add('active');
        }

        function closeCompanyModal() {
            document.getElementById('company-modal').classList.remove('active');
            document.getElementById('company-form').reset();
        }

        function saveCompany(event) {
            event.preventDefault();
            
            const companyId = document.getElementById('company-id').value;
            const companyData = {
                name: document.getElementById('company-name').value,
                cnpj: document.getElementById('company-cnpj').value,
                email: document.getElementById('company-email').value,
                sector: document.getElementById('company-sector').value,
                jobs: parseInt(document.getElementById('company-jobs').value),
                status: document.getElementById('company-status').value,
                date: new Date().toLocaleDateString('pt-BR')
            };
            
            if (companyId) {
                const index = companies.findIndex(c => c.id === parseInt(companyId));
                companies[index] = { ...companies[index], ...companyData };
            } else {
                companyData.id = companies.length > 0 ? Math.max(...companies.map(c => c.id)) + 1 : 1;
                companies.push(companyData);
            }
            
            localStorage.setItem('vigged_companies', JSON.stringify(companies));
            closeCompanyModal();
            renderCompanies();
            updateDashboard();
        }

        function editCompany(companyId) {
            openCompanyModal(companyId);
        }

        function viewCompany(companyId) {
            const company = companies.find(c => c.id === companyId);
            alert(`Nome: ${company.name}\nCNPJ: ${company.cnpj}\nEmail: ${company.email}\nSetor: ${company.sector}\nVagas: ${company.jobs}\nStatus: ${company.status}\nData: ${company.date}`);
        }

        function deleteCompany(companyId) {
            if (confirm('Tem certeza que deseja excluir esta empresa?')) {
                companies = companies.filter(c => c.id !== companyId);
                localStorage.setItem('vigged_companies', JSON.stringify(companies));
                renderCompanies();
                updateDashboard();
            }
        }

        // Initialize dashboard on load
        updateDashboard();
    </script>
</body>
</html>
