<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil da Empresa - Vigged</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-8">
                    <a href="index.php" class="text-2xl font-bold">Vigged</a>
                    <div class="hidden md:flex space-x-6">
                        <a href="index.php" class="hover:text-purple-200 transition">Início</a>
                        <a href="vagas.php" class="hover:text-purple-200 transition">Vagas</a>
                        <a href="empresas.php" class="hover:text-purple-200 transition">Empresas</a>
                        <a href="sobre-nos.php" class="hover:text-purple-200 transition">Sobre nós</a>
                        <a href="suporte.php" class="hover:text-purple-200 transition">Contato</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button onclick="logout()" class="px-6 py-2 bg-white text-purple-600 rounded-lg hover:bg-purple-50 transition font-medium">
                        Sair
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Company Header -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
            <div class="h-32 bg-gradient-to-r from-purple-600 to-purple-400"></div>
            <div class="px-6 pb-6">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between">
                    <div class="flex items-end space-x-4">
                        <div class="relative -mt-16">
                            <img id="companyLogo" src="/placeholder.svg?height=120&width=120" alt="Logo da empresa" class="w-32 h-32 rounded-lg border-4 border-white object-cover bg-white">
                            <button onclick="openEditCompanyModal()" class="absolute bottom-0 right-0 bg-purple-600 text-white p-2 rounded-full hover:bg-purple-700 transition">
                                <i class="fas fa-camera text-sm"></i>
                            </button>
                        </div>
                        <div class="pb-2">
                            <h1 id="companyName" class="text-2xl font-bold text-gray-900">Tech Solutions Ltda</h1>
                            <p id="companyIndustry" class="text-gray-600">Tecnologia da Informação</p>
                            <p class="text-gray-500 text-sm mt-1">
                                <i class="fas fa-map-marker-alt mr-1"></i>
                                <span id="companyLocation">São Paulo, SP</span>
                            </p>
                        </div>
                    </div>
                    <div class="mt-4 md:mt-0 flex space-x-3">
                        <button onclick="openEditCompanyModal()" class="px-4 py-2 border border-purple-600 text-purple-600 rounded-lg hover:bg-purple-50 transition">
                            <i class="fas fa-edit mr-2"></i>Editar Perfil
                        </button>
                        <button onclick="openJobModal()" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
                            <i class="fas fa-plus mr-2"></i>Publicar Vaga
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Current Plan Card -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Plano Atual</h3>
                    <div id="currentPlan" class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">Plano:</span>
                            <span id="planName" class="font-semibold text-purple-600">Gratuito</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">Vagas ativas:</span>
                            <span class="font-semibold">0/2</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">Candidatos:</span>
                            <span class="font-semibold">0/50</span>
                        </div>
                    </div>
                    <button onclick="openPlansModal()" class="w-full mt-4 bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                        <i class="fas fa-crown mr-2"></i>Fazer Upgrade
                    </button>
                </div>

                <!-- Quick Stats -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Estatísticas</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 text-sm">Visualizações</span>
                            <span class="font-semibold text-lg">1,234</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 text-sm">Candidaturas</span>
                            <span class="font-semibold text-lg">45</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 text-sm">Taxa de resposta</span>
                            <span class="font-semibold text-lg">87%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- About Company -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-gray-900">Sobre a Empresa</h3>
                        <button onclick="openEditCompanyModal()" class="text-purple-600 hover:text-purple-700">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                    <p id="companyAbout" class="text-gray-700 text-sm leading-relaxed">
                        Somos uma empresa de tecnologia comprometida com a diversidade e inclusão. Buscamos talentos PCD para compor nosso time e construir soluções inovadoras juntos.
                    </p>
                </div>

                <!-- Active Jobs -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-gray-900">Vagas Ativas</h3>
                        <button onclick="openJobModal()" class="text-purple-600 hover:text-purple-700">
                            <i class="fas fa-plus"></i> Nova Vaga
                        </button>
                    </div>
                    <div id="activeJobsList" class="space-y-4">
                        <!-- Jobs will be loaded here -->
                    </div>
                </div>

                <!-- Interested Candidates -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Candidatos Interessados</h3>
                    <div id="candidatesList" class="space-y-4">
                        <!-- Candidates will be loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Plans Modal -->
    <div id="plansModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
        <div class="bg-white rounded-lg max-w-5xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-900">Escolha seu Plano</h3>
                    <button onclick="closePlansModal()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Plano Essencial -->
                    <div class="border-2 border-gray-200 rounded-lg p-6 hover:border-purple-300 transition">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Plano Essencial</h4>
                        <p class="text-gray-600 text-sm mb-4">Inclusão Consciente</p>
                        <div class="mb-6">
                            <span class="text-4xl font-bold text-purple-600">R$199</span>
                            <span class="text-gray-600">/mês</span>
                        </div>
                        <ul class="space-y-3 mb-6 text-sm">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>3 vagas ativas por mês</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Currículo das vagas até 25 dias</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Vagas destacadas nas 48h iniciais</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Acesso a cursos e materiais sobre comunicação PCD</span>
                            </li>
                        </ul>
                        <button onclick="subscribePlan('Essencial', 199)" class="w-full bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition">
                            Contratar Plano
                        </button>
                    </div>

                    <!-- Plano Profissional -->
                    <div class="border-2 border-purple-600 rounded-lg p-6 relative">
                        <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-purple-600 text-white px-4 py-1 rounded-full text-xs font-semibold">
                            MAIS POPULAR
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Plano Profissional</h4>
                        <p class="text-gray-600 text-sm mb-4">Diversidade em Foco</p>
                        <div class="mb-6">
                            <span class="text-4xl font-bold text-purple-600">R$399</span>
                            <span class="text-gray-600">/mês</span>
                        </div>
                        <ul class="space-y-3 mb-6 text-sm">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>10 vagas ativas por mês</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Currículo das vagas até 45 dias</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Vagas em destaque na página principal</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Estatísticas e métricas de desempenho das vagas</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Envio automático para vagas banco de talentos</span>
                            </li>
                        </ul>
                        <button onclick="subscribePlan('Profissional', 399)" class="w-full bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition">
                            Contratar Plano
                        </button>
                    </div>

                    <!-- Plano Enterprise -->
                    <div class="border-2 border-gray-200 rounded-lg p-6 hover:border-purple-300 transition">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Plano Enterprise</h4>
                        <p class="text-gray-600 text-sm mb-4">Inclusão Total</p>
                        <div class="mb-6">
                            <span class="text-4xl font-bold text-purple-600">R$799</span>
                            <span class="text-gray-600">/mês</span>
                        </div>
                        <ul class="space-y-3 mb-6 text-sm">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Vagas ilimitadas</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Currículo-das vagas até 60 dias</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Destaque premium em todas as páginas</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Consultoria especializada em inclusão e acessibilidade</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Acesso a consultoria de inclusão e acessibilidade</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span>Relatórios avançados e segmentados</span>
                            </li>
                        </ul>
                        <button onclick="subscribePlan('Enterprise', 799)" class="w-full bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition">
                            Contratar Plano
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Company Modal -->
    <div id="editCompanyModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Editar Informações da Empresa</h3>
                    <button onclick="closeEditCompanyModal()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <form id="editCompanyForm" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nome da Empresa</label>
                        <input type="text" id="editCompanyName" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Setor</label>
                        <input type="text" id="editCompanyIndustry" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Localização</label>
                        <input type="text" id="editCompanyLocation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Sobre a Empresa</label>
                        <textarea id="editCompanyAbout" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"></textarea>
                    </div>
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="closeEditCompanyModal()" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                            Cancelar
                        </button>
                        <button type="submit" class="px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- New Job Modal -->
    <div id="jobModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Publicar Nova Vaga</h3>
                    <button onclick="closeJobModal()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <form id="newJobForm" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Título da Vaga</label>
                        <input type="text" id="jobTitle" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Localização</label>
                        <input type="text" id="jobLocation" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tipo de Contrato</label>
                        <select id="jobType" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="CLT">CLT</option>
                            <option value="PJ">PJ</option>
                            <option value="Estágio">Estágio</option>
                            <option value="Temporário">Temporário</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Faixa Salarial</label>
                        <input type="text" id="jobSalary" placeholder="Ex: R$ 5.000 - R$ 8.000" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Descrição da Vaga</label>
                        <textarea id="jobDescription" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"></textarea>
                    </div>
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="closeJobModal()" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                            Cancelar
                        </button>
                        <button type="submit" class="px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
                            Publicar Vaga
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Vigged</h3>
                    <p class="text-gray-400 text-sm">Conectando talentos PCD com empresas comprometidas com a diversidade e inclusão.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Para Candidatos</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Buscar Vagas</a></li>
                        <li><a href="#" class="hover:text-white transition">Criar Currículo</a></li>
                        <li><a href="#" class="hover:text-white transition">Recursos</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Para Empresas</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="empresas.php" class="hover:text-white transition">Planos</a></li>
                        <li><a href="cadastro-empresa.php" class="hover:text-white transition">Publicar Vagas</a></li>
                        <li><a href="#" class="hover:text-white transition">Consultoria</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Suporte</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Central de Ajuda</a></li>
                        <li><a href="#" class="hover:text-white transition">Contato</a></li>
                        <li><a href="#" class="hover:text-white transition">Termos de Uso</a></li>
                        <li><a href="#" class="hover:text-white transition">Privacidade</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>© 2025 Vigged. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Load company data
        function loadCompanyData() {
            const companyData = JSON.parse(localStorage.getItem('companyData') || '{}');
            
            if (companyData.razaoSocial) {
                document.getElementById('companyName').textContent = companyData.razaoSocial;
            }
            if (companyData.setor) {
                document.getElementById('companyIndustry').textContent = companyData.setor;
            }
            if (companyData.cidade && companyData.estado) {
                document.getElementById('companyLocation').textContent = `${companyData.cidade}, ${companyData.estado}`;
            }

            // Load active jobs
            loadActiveJobs();
            
            // Load candidates
            loadCandidates();
        }

        function loadActiveJobs() {
            const jobs = JSON.parse(localStorage.getItem('companyJobs') || '[]');
            const jobsList = document.getElementById('activeJobsList');
            
            if (jobs.length === 0) {
                jobsList.innerHTML = '<p class="text-gray-500 text-center py-8">Nenhuma vaga publicada ainda. Clique em "Publicar Vaga" para começar.</p>';
                return;
            }

            jobsList.innerHTML = jobs.map((job, index) => `
                <div class="border border-gray-200 rounded-lg p-4">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">${job.title}</h4>
                            <div class="flex flex-wrap gap-3 mt-2 text-sm text-gray-600">
                                <span><i class="fas fa-map-marker-alt mr-1"></i>${job.location}</span>
                                <span><i class="fas fa-briefcase mr-1"></i>${job.type}</span>
                                ${job.salary ? `<span><i class="fas fa-dollar-sign mr-1"></i>${job.salary}</span>` : ''}
                            </div>
                            <p class="text-sm text-gray-700 mt-2">${job.description.substring(0, 100)}...</p>
                            <div class="flex items-center gap-4 mt-3 text-sm">
                                <span class="text-purple-600 font-medium">
                                    <i class="fas fa-users mr-1"></i>12 candidatos
                                </span>
                                <span class="text-gray-500">Publicada há 3 dias</span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button onclick="editJob(${index})" class="text-purple-600 hover:text-purple-700 p-2">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="deleteJob(${index})" class="text-red-600 hover:text-red-700 p-2">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        function loadCandidates() {
            const candidates = [
                {
                    name: 'Maria Santos',
                    position: 'Desenvolvedora Frontend',
                    location: 'São Paulo, SP',
                    match: '95%',
                    applied: '2 dias atrás',
                    job: 'Desenvolvedor Full Stack'
                },
                {
                    name: 'Carlos Oliveira',
                    position: 'Designer UX/UI',
                    location: 'Rio de Janeiro, RJ',
                    match: '88%',
                    applied: '3 dias atrás',
                    job: 'Designer de Produto'
                },
                {
                    name: 'Ana Paula Costa',
                    position: 'Analista de Dados',
                    location: 'Belo Horizonte, MG',
                    match: '92%',
                    applied: '5 dias atrás',
                    job: 'Cientista de Dados'
                }
            ];

            const candidatesList = document.getElementById('candidatesList');
            candidatesList.innerHTML = candidates.map(candidate => `
                <div class="border border-gray-200 rounded-lg p-4 hover:border-purple-300 transition">
                    <div class="flex items-start justify-between">
                        <div class="flex space-x-4">
                            <img src="/placeholder.svg?height=60&width=60" alt="${candidate.name}" class="w-16 h-16 rounded-full object-cover">
                            <div>
                                <h4 class="font-semibold text-gray-900">${candidate.name}</h4>
                                <p class="text-sm text-gray-600">${candidate.position}</p>
                                <p class="text-xs text-gray-500 mt-1">
                                    <i class="fas fa-map-marker-alt mr-1"></i>${candidate.location}
                                </p>
                                <p class="text-xs text-gray-500 mt-1">
                                    Candidatou-se para: <span class="font-medium">${candidate.job}</span>
                                </p>
                                <p class="text-xs text-gray-500 mt-1">${candidate.applied}</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold mb-2">
                                ${candidate.match} Match
                            </div>
                            <div class="flex space-x-2">
                                <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition text-sm">
                                    Ver Perfil
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Modal functions
        function openPlansModal() {
            document.getElementById('plansModal').classList.remove('hidden');
        }

        function closePlansModal() {
            document.getElementById('plansModal').classList.add('hidden');
        }

        function openEditCompanyModal() {
            document.getElementById('editCompanyName').value = document.getElementById('companyName').textContent;
            document.getElementById('editCompanyIndustry').value = document.getElementById('companyIndustry').textContent;
            document.getElementById('editCompanyLocation').value = document.getElementById('companyLocation').textContent;
            document.getElementById('editCompanyAbout').value = document.getElementById('companyAbout').textContent;
            document.getElementById('editCompanyModal').classList.remove('hidden');
        }

        function closeEditCompanyModal() {
            document.getElementById('editCompanyModal').classList.add('hidden');
        }

        function openJobModal() {
            document.getElementById('jobModal').classList.remove('hidden');
        }

        function closeJobModal() {
            document.getElementById('jobModal').classList.add('hidden');
            document.getElementById('newJobForm').reset();
        }

        // Form submissions
        document.getElementById('editCompanyForm').addEventListener('submit', function(e) {
            e.preventDefault();
            document.getElementById('companyName').textContent = document.getElementById('editCompanyName').value;
            document.getElementById('companyIndustry').textContent = document.getElementById('editCompanyIndustry').value;
            document.getElementById('companyLocation').textContent = document.getElementById('editCompanyLocation').value;
            document.getElementById('companyAbout').textContent = document.getElementById('editCompanyAbout').value;
            
            // Save to localStorage
            const companyData = JSON.parse(localStorage.getItem('companyData') || '{}');
            companyData.razaoSocial = document.getElementById('editCompanyName').value;
            companyData.setor = document.getElementById('editCompanyIndustry').value;
            localStorage.setItem('companyData', JSON.stringify(companyData));
            
            closeEditCompanyModal();
            alert('Informações da empresa atualizadas com sucesso!');
        });

        document.getElementById('newJobForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const newJob = {
                title: document.getElementById('jobTitle').value,
                location: document.getElementById('jobLocation').value,
                type: document.getElementById('jobType').value,
                salary: document.getElementById('jobSalary').value,
                description: document.getElementById('jobDescription').value,
                createdAt: new Date().toISOString()
            };

            const jobs = JSON.parse(localStorage.getItem('companyJobs') || '[]');
            jobs.push(newJob);
            localStorage.setItem('companyJobs', JSON.stringify(jobs));
            
            closeJobModal();
            loadActiveJobs();
            alert('Vaga publicada com sucesso!');
        });

        function subscribePlan(planName, price) {
            if (confirm(`Deseja assinar o Plano ${planName} por R$${price}/mês?`)) {
                document.getElementById('planName').textContent = planName;
                localStorage.setItem('companyPlan', JSON.stringify({ name: planName, price: price }));
                closePlansModal();
                alert(`Plano ${planName} assinado com sucesso! Você será redirecionado para o pagamento.`);
            }
        }

        function editJob(index) {
            alert('Funcionalidade de edição de vaga em desenvolvimento');
        }

        function deleteJob(index) {
            if (confirm('Deseja realmente excluir esta vaga?')) {
                const jobs = JSON.parse(localStorage.getItem('companyJobs') || '[]');
                jobs.splice(index, 1);
                localStorage.setItem('companyJobs', JSON.stringify(jobs));
                loadActiveJobs();
                alert('Vaga excluída com sucesso!');
            }
        }

        function logout() {
            if (confirm('Deseja realmente sair?')) {
                window.location.href = 'index.php';
            }
        }

        // Load data on page load
        loadCompanyData();
    </script>
</body>
</html>
