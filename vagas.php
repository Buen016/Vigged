<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas - Vigged</title>
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
                <a href="suporte.php" class="hover:text-purple-200 transition">Contato</a>
            </div>
            <div class="flex space-x-3">
                <a href="login.php" class="px-4 py-2 border border-white rounded-lg hover:bg-white hover:text-purple-600 transition">Login</a>
                <a href="pre-cadastro.php" class="px-4 py-2 bg-white text-purple-600 rounded-lg hover:bg-purple-50 transition">Cadastrar-se</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-purple-600 mb-4">Encontre seu próximo emprego</h1>
            <p class="text-gray-600 text-lg mb-8">Acesse aqui milhares de vagas para PCDs</p>
            
            <!-- Search Bar -->
            <div class="flex items-center max-w-2xl mx-auto bg-white border-2 border-gray-300 rounded-full px-6 py-3 shadow-lg">
                <svg class="w-6 h-6 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="text" id="searchInput" placeholder="Buscar por título, cidades, palavras chaves..." class="flex-1 outline-none text-gray-700">
                <button onclick="searchJobs()" class="bg-purple-600 text-white px-6 py-2 rounded-full hover:bg-purple-700 transition ml-4">Buscar</button>
            </div>
        </div>
    </section>

    <!-- Featured Companies -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-800">Empresas em Destaque</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="featuredCompanies">
                <!-- Companies will be loaded here -->
            </div>
        </div>
    </section>

    <!-- Featured Jobs -->
    <section class="py-16 bg-purple-600">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10 text-white">Vagas em Destaque</h2>
            <div class="space-y-4" id="featuredJobs">
                <!-- Jobs will be loaded here -->
            </div>
            <div class="text-center mt-8">
                <button onclick="loadMoreJobs()" class="bg-white text-purple-600 px-8 py-3 rounded-full hover:bg-gray-100 transition font-semibold">Ver mais vagas</button>
            </div>
        </div>
    </section>

    <!-- Accessibility Features -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Acessibilidade para Todos</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Vagas Inclusivas</h3>
                    <p class="text-gray-600">Todas as vagas são verificadas para garantir ambientes de trabalho acessíveis e inclusivos.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Suporte Especializado</h3>
                    <p class="text-gray-600">Oferecemos suporte personalizado durante todo o processo de candidatura.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Empresas Certificadas</h3>
                    <p class="text-gray-600">Trabalhamos apenas com empresas comprometidas com a diversidade e inclusão.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
       <!-- Footer -->
       <footer class="bg-purple-600 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Vigged</h3>
                    <p class="text-purple-200 mb-4">
                        Conectando talentos PCD às melhores oportunidades do mercado.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-purple-200 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="hover:text-purple-200 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="#" class="hover:text-purple-200 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        <a href="#" class="hover:text-purple-200 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Para Candidatos</h4>
                    <ul class="space-y-2 text-purple-200">
                        <li><a href="vagas.php" class="hover:text-white transition">Buscar Vagas</a></li>
                        <li><a href="pre-cadastro.php" class="hover:text-white transition">Criar Conta</a></li>
                        <li><a href="perfil-pcd.php" class="hover:text-white transition">Meu Perfil</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Para Empresas</h4>
                    <ul class="space-y-2 text-purple-200">
                        <li><a href="empresas.php" class="hover:text-white transition">Planos</a></li>
                        <li><a href="cadastro-empresa.php" class="hover:text-white transition">Cadastrar Empresa</a></li>
                        <li><a href="perfil-empresa.php" class="hover:text-white transition">Painel Empresa</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Suporte</h4>
                    <ul class="space-y-2 text-purple-200">
                        <li><a href="suporte.php" class="hover:text-white transition">Contato</a></li>
                        <li><a href="sobre-nos.php" class="hover:text-white transition">Sobre Nós</a></li>
                        <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition">Termos de Uso</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-purple-500 pt-8 text-center text-purple-200">
                <p>&copy; 2025 Vigged. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    <script>
        // Sample job data
        const jobs = [
            {
                id: 1,
                title: "Analista de Recursos Humanos",
                company: "Tecnologia e Inovação",
                location: "São Paulo, SP",
                type: "Tempo Integral",
                salary: "R$ 3.500 - R$ 4.500",
                description: "Buscamos profissional para atuar na área de RH com foco em inclusão."
            },
            {
                id: 2,
                title: "Desenvolvedor Frontend",
                company: "Saúde e Bem-estar",
                location: "Remoto",
                type: "Tempo Integral",
                salary: "R$ 5.000 - R$ 7.500",
                description: "Desenvolvedor com experiência em React e acessibilidade web."
            },
            {
                id: 3,
                title: "Assistente Administrativo",
                company: "Serviços Financeiros",
                location: "Rio de Janeiro, RJ",
                type: "Meio Período",
                salary: "R$ 2.500 - R$ 3.200",
                description: "Auxiliar nas rotinas administrativas e atendimento ao cliente."
            },
            {
                id: 4,
                title: "Designer UX/UI",
                company: "Agência Digital",
                location: "Belo Horizonte, MG",
                type: "Tempo Integral",
                salary: "R$ 4.000 - R$ 6.000",
                description: "Criar interfaces acessíveis e experiências inclusivas."
            },
            {
                id: 5,
                title: "Analista de Suporte",
                company: "Tech Solutions",
                location: "Curitiba, PR",
                type: "Tempo Integral",
                salary: "R$ 3.000 - R$ 4.000",
                description: "Prestar suporte técnico aos clientes da empresa."
            }
        ];

        const companies = [
            {
                name: "Tecnologia e Inovação",
                sector: "Tecnologia",
                logo: "🔵"
            },
            {
                name: "Saúde e Bem-estar",
                sector: "Saúde",
                logo: "🟢"
            },
            {
                name: "Serviços Financeiros",
                sector: "Finanças",
                logo: "🟡"
            }
        ];

        let displayedJobs = 3;

        function loadFeaturedCompanies() {
            const container = document.getElementById('featuredCompanies');
            container.innerHTML = companies.map(company => `
                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <div class="text-5xl mb-4">${company.logo}</div>
                    <h3 class="font-bold text-lg mb-2">${company.name}</h3>
                    <p class="text-gray-600 text-sm">${company.sector}</p>
                </div>
            `).join('');
        }

        function loadFeaturedJobs() {
            const container = document.getElementById('featuredJobs');
            const jobsToShow = jobs.slice(0, displayedJobs);
            
            container.innerHTML = jobsToShow.map(job => `
                <div class="bg-white rounded-lg p-6 flex items-center justify-between hover:shadow-lg transition">
                    <div class="flex-1">
                        <h3 class="font-bold text-xl mb-2 text-gray-800">${job.title}</h3>
                        <p class="text-gray-600 mb-2">${job.company}</p>
                        <div class="flex items-center space-x-4 text-sm text-gray-500">
                            <span>${job.location}</span>
                            <span>•</span>
                            <span>${job.type}</span>
                            <span>•</span>
                            <span>${job.salary}</span>
                        </div>
                    </div>
                    <button onclick="viewJob(${job.id})" class="bg-purple-600 text-white px-6 py-2 rounded-full hover:bg-purple-700 transition font-semibold">Ver vaga</button>
                </div>
            `).join('');
        }

        function loadMoreJobs() {
            displayedJobs = Math.min(displayedJobs + 3, jobs.length);
            loadFeaturedJobs();
            
            if (displayedJobs >= jobs.length) {
                event.target.style.display = 'none';
            }
        }

        function searchJobs() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const filteredJobs = jobs.filter(job => 
                job.title.toLowerCase().includes(searchTerm) ||
                job.company.toLowerCase().includes(searchTerm) ||
                job.location.toLowerCase().includes(searchTerm)
            );
            
            const container = document.getElementById('featuredJobs');
            if (filteredJobs.length === 0) {
                container.innerHTML = '<div class="text-center text-white text-lg">Nenhuma vaga encontrada.</div>';
            } else {
                container.innerHTML = filteredJobs.map(job => `
                    <div class="bg-white rounded-lg p-6 flex items-center justify-between hover:shadow-lg transition">
                        <div class="flex-1">
                            <h3 class="font-bold text-xl mb-2 text-gray-800">${job.title}</h3>
                            <p class="text-gray-600 mb-2">${job.company}</p>
                            <div class="flex items-center space-x-4 text-sm text-gray-500">
                                <span>${job.location}</span>
                                <span>•</span>
                                <span>${job.type}</span>
                                <span>•</span>
                                <span>${job.salary}</span>
                            </div>
                        </div>
                        <button onclick="viewJob(${job.id})" class="bg-purple-600 text-white px-6 py-2 rounded-full hover:bg-purple-700 transition font-semibold">Ver vaga</button>
                    </div>
                `).join('');
            }
        }

        function viewJob(jobId) {
            // Store job ID and redirect to job details or application page
            localStorage.setItem('selectedJobId', jobId);
            window.location.href = 'pre-cadastro.php';
        }

        // Initialize page
        loadFeaturedCompanies();
        loadFeaturedJobs();
    </script>
</body>
</html>
