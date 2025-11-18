<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil - Vigged</title>
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
                    <!-- Navigation buttons not needed on profile page, keeping logout button -->
                    <button onclick="logout()" class="px-6 py-2 bg-white text-purple-600 rounded-lg hover:bg-purple-50 transition font-medium">
                        Sair
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Sidebar - Profile Card -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-24 bg-gradient-to-r from-purple-600 to-purple-400"></div>
                    <div class="px-6 pb-6">
                        <div class="relative -mt-12 mb-4">
                            <img id="profilePhoto" src="/placeholder.svg?height=100&width=100" alt="Foto de perfil" class="w-24 h-24 rounded-full border-4 border-white object-cover">
                            <button onclick="openEditModal()" class="absolute bottom-0 right-0 bg-purple-600 text-white p-2 rounded-full hover:bg-purple-700 transition">
                                <i class="fas fa-camera text-sm"></i>
                            </button>
                        </div>
                        <h2 id="profileName" class="text-xl font-bold text-gray-900">João Silva</h2>
                        <p id="profileHeadline" class="text-gray-600 text-sm mt-1">Desenvolvedor Full Stack | PCD</p>
                        <p class="text-gray-500 text-sm mt-2">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            <span id="profileLocation">São Paulo, SP</span>
                        </p>
                        
                        <div class="mt-4 pt-4 border-t">
                            <div class="flex justify-between text-sm mb-2">
                                <span class="text-gray-600">Visualizações do perfil</span>
                                <span class="text-purple-600 font-semibold">127</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Conexões</span>
                                <span class="text-purple-600 font-semibold">342</span>
                            </div>
                        </div>

                        <button onclick="openEditModal()" class="w-full mt-4 bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                            Editar Perfil
                        </button>
                    </div>
                </div>

                <!-- Skills Card -->
                <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Habilidades</h3>
                    <div id="skillsList" class="flex flex-wrap gap-2">
                        <!-- Skills will be loaded here -->
                    </div>
                    <button onclick="openSkillsModal()" class="text-purple-600 text-sm mt-4 hover:underline">
                        + Adicionar habilidade
                    </button>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- About Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-gray-900">Sobre</h3>
                        <button onclick="openEditModal()" class="text-purple-600 hover:text-purple-700">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                    <p id="profileAbout" class="text-gray-700 text-sm leading-relaxed">
                        Desenvolvedor Full Stack com 5 anos de experiência em desenvolvimento web. Especializado em React, Node.js e bancos de dados relacionais. Apaixonado por criar soluções acessíveis e inclusivas.
                    </p>
                </div>

                <!-- Experience Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-gray-900">Experiência</h3>
                        <button onclick="openExperienceModal()" class="text-purple-600 hover:text-purple-700">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div id="experienceList" class="space-y-4">
                        <!-- Experience items will be loaded here -->
                    </div>
                </div>

                <!-- Job Recommendations -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Vagas Recomendadas</h3>
                    <div id="jobsList" class="space-y-4">
                        <!-- Job listings will be loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div id="editModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Editar Perfil</h3>
                    <button onclick="closeEditModal()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <form id="editProfileForm" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nome Completo</label>
                        <input type="text" id="editName" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Headline</label>
                        <input type="text" id="editHeadline" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Localização</label>
                        <input type="text" id="editLocation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Sobre</label>
                        <textarea id="editAbout" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"></textarea>
                    </div>
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="closeEditModal()" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
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
                        <li><a href="empresas.html" class="hover:text-white transition">Planos</a></li>
                        <li><a href="cadastro-empresa.html" class="hover:text-white transition">Publicar Vagas</a></li>
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
        // Load profile data from localStorage
        function loadProfile() {
            const preRegData = JSON.parse(localStorage.getItem('preRegistrationData') || '{}');
            const regData = JSON.parse(localStorage.getItem('registrationData') || '{}');
            
            // Set profile data
            if (preRegData.nome || regData.nome) {
                document.getElementById('profileName').textContent = preRegData.nome || regData.nome || 'João Silva';
            }
            
            // Load skills
            const skills = ['JavaScript', 'React', 'Node.js', 'HTML/CSS', 'SQL', 'Git'];
            const skillsList = document.getElementById('skillsList');
            skillsList.innerHTML = skills.map(skill => 
                `<span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm">${skill}</span>`
            ).join('');

            // Load experience
            const experiences = [
                {
                    title: 'Desenvolvedor Full Stack',
                    company: 'Tech Solutions',
                    period: 'Jan 2021 - Presente',
                    description: 'Desenvolvimento de aplicações web usando React e Node.js'
                },
                {
                    title: 'Desenvolvedor Frontend',
                    company: 'Digital Agency',
                    period: 'Mar 2019 - Dez 2020',
                    description: 'Criação de interfaces responsivas e acessíveis'
                }
            ];

            const experienceList = document.getElementById('experienceList');
            experienceList.innerHTML = experiences.map(exp => `
                <div class="flex space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-purple-100 rounded flex items-center justify-center">
                            <i class="fas fa-briefcase text-purple-600"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-900">${exp.title}</h4>
                        <p class="text-sm text-gray-600">${exp.company}</p>
                        <p class="text-xs text-gray-500 mt-1">${exp.period}</p>
                        <p class="text-sm text-gray-700 mt-2">${exp.description}</p>
                    </div>
                </div>
            `).join('');

            // Load job recommendations
            const jobs = [
                {
                    title: 'Desenvolvedor Full Stack',
                    company: 'Empresa Tech Inclusiva',
                    location: 'São Paulo, SP',
                    type: 'CLT',
                    salary: 'R$ 8.000 - R$ 12.000',
                    posted: '2 dias atrás'
                },
                {
                    title: 'Frontend Developer',
                    company: 'StartUp Inovadora',
                    location: 'Remoto',
                    type: 'PJ',
                    salary: 'R$ 10.000 - R$ 15.000',
                    posted: '5 dias atrás'
                },
                {
                    title: 'Desenvolvedor React',
                    company: 'Agência Digital',
                    location: 'Rio de Janeiro, RJ',
                    type: 'CLT',
                    salary: 'R$ 7.000 - R$ 10.000',
                    posted: '1 semana atrás'
                }
            ];

            const jobsList = document.getElementById('jobsList');
            jobsList.innerHTML = jobs.map(job => `
                <div class="border border-gray-200 rounded-lg p-4 hover:border-purple-300 hover:shadow-md transition cursor-pointer">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 text-lg">${job.title}</h4>
                            <p class="text-purple-600 font-medium mt-1">${job.company}</p>
                            <div class="flex flex-wrap gap-3 mt-2 text-sm text-gray-600">
                                <span><i class="fas fa-map-marker-alt mr-1"></i>${job.location}</span>
                                <span><i class="fas fa-briefcase mr-1"></i>${job.type}</span>
                                <span><i class="fas fa-dollar-sign mr-1"></i>${job.salary}</span>
                            </div>
                            <p class="text-xs text-gray-500 mt-2">${job.posted}</p>
                        </div>
                        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition text-sm">
                            Candidatar
                        </button>
                    </div>
                </div>
            `).join('');
        }

        // Edit profile modal functions
        function openEditModal() {
            document.getElementById('editName').value = document.getElementById('profileName').textContent;
            document.getElementById('editHeadline').value = document.getElementById('profileHeadline').textContent;
            document.getElementById('editLocation').value = document.getElementById('profileLocation').textContent;
            document.getElementById('editAbout').value = document.getElementById('profileAbout').textContent;
            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        document.getElementById('editProfileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            document.getElementById('profileName').textContent = document.getElementById('editName').value;
            document.getElementById('profileHeadline').textContent = document.getElementById('editHeadline').value;
            document.getElementById('profileLocation').textContent = document.getElementById('editLocation').value;
            document.getElementById('profileAbout').textContent = document.getElementById('editAbout').value;
            closeEditModal();
            alert('Perfil atualizado com sucesso!');
        });

        function openSkillsModal() {
            alert('Funcionalidade de adicionar habilidades em desenvolvimento');
        }

        function openExperienceModal() {
            alert('Funcionalidade de adicionar experiência em desenvolvimento');
        }

        function logout() {
            if (confirm('Deseja realmente sair?')) {
                window.location.href = 'index.php';
            }
        }

        // Load profile on page load
        loadProfile();
    </script>
</body>
</html>
