<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ appname }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="flex flex-col min-h-screen">
    <header class="w-full text-center border-b border-grey p-4">
        <h1>{{ appname }}</h1>
    </header>
    <div id="content" class="flex-1 container mx-auto p-8">
        <h2 class="mb-4">This is {{ appname }} {{ version }}</h2>
        <p class="text-justify">
            {{ appname }} is a PHP framework in development.
        </p>
    </div>
    <footer class="w-full pin-b text-center border-t border-grey p-4">
        Created by {{ author }} ({{ twitter }})
    </footer>
  </body>
</html>