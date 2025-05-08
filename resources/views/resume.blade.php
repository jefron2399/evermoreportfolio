<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evermore Harmony Mwase - Resume</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Floating Button Styles -->
    <style>
        .floating-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border-radius: 50px;
            font-size: 16px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: 0.3s;
        }
        .floating-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body class="bg-gray-900 text-white p-6">

    <!-- Resume Container -->
    <div class="max-w-3xl mx-auto bg-gray-800 p-8 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-center mb-4">Evermore Harmony Mwase</h1>
        <p class="text-center text-gray-400">Computer Engineer | Freelancer
        </p>

        <hr class="my-6 border-gray-600">

        <!-- Contact Info -->
        <div class="text-center">
            <p>Email: <a href="mailto:mwase.evermore@gmail.com" class="text-blue-400">mwase.evermore@gmail.com</a></p>
            <p>Phone: <a href="tel:+27602412775" class="text-blue-400">+27 60 241 2775</a></p>
            <p>Location: Cape Town, WC 7925</p>
        </div>

        <hr class="my-6 border-gray-600">

        <!-- Work Experience -->
        <h2 class="text-2xl font-bold mb-3">Work Experience</h2>
        <div class="mb-4">
            <h3 class="text-xl font-semibold">IT Support Technician - PixelFaerie - <i>South Africa, Cape Town</i> </h3>
            <p class="text-gray-400">August 2024 - April 2025</p>
            <p>Providing IT support (Helpdesk), troubleshooting hardware/software issues, and ensuring smooth operations.</p>
        </div>

        <div class="mb-4">
            <h3 class="text-xl font-semibold">Desktop Publisher - PixelFaerie - <i>South Africa, Cape Town</i></h3>
            <p class="text-gray-400">March 2024 - July 2024</p>
            <p>Graphical designer : Creating high-quality PowerPoint slides for clients.</p>
        </div>

        <div class="mb-4">
            <h3 class="text-xl font-semibold">IT Specialist - Audit Consult - <i>Malawi, Lilongwe</i></h3>
            <p class="text-gray-400">June 2021 - December 2023</p>
            <p>Developed web applications, provided IT support, and managed network infrastructure.</p>
        </div>

        <hr class="my-6 border-gray-600">

        <!-- Education -->
        <h2 class="text-2xl font-bold mb-3">Education</h2>
        <div class="mb-4">
            <h3 class="text-xl font-semibold">Bachelor's of Science in Computer Engineering </h3>
            <p class="text-gray-400">University of Livingstonia, Malawi - 2018 to 2023</p>
        </div>

        <hr class="my-6 border-gray-600">

        <!-- Skills -->
        <h2 class="text-2xl font-bold mb-3">Skills</h2>
        <ul class="list-disc pl-6">
            <li>Active Directory (3 years)</li>
            <li>Project Management & Coordination (4 years)</li>
            <li>Programming Languages: PHP, JavaScript, React, Laravel, Python, Java, C++, Python</li>
            <li>Microsoft Office & Windows Server (5 years)</li>
            <li>Computer Networking & IT Support (4 years)</li>
            <li>Cloud Computing (4 years)</li>
        </ul>

        <hr class="my-6 border-gray-600">

        <!-- Links -->
        <h2 class="text-2xl font-bold mb-3">Links</h2>
        <p><a href="https://evermoreportfolio-production.up.railway.app" class="text-blue-400">My Portfolio</a> ,<a href="https://www.youtube.com/channel/UCkgJ9J-3OZVa6CWNI5na_0A" class="text-blue-400">YouTube Channel</a></p>
    </div>

    <!-- Floating Download Button -->
    <button class="floating-btn" onclick="downloadResume()">Download PDF</button>

    <!-- PDF Download Script -->
    <script>
        function downloadResume() {
            window.open('{{ route("resume.download") }}', '_blank');
        }
    </script>

</body>
</html>