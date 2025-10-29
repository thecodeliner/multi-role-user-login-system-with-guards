<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Simple Form — Tailwind</title>

  <!-- Tailwind Play CDN (good for prototypes) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Optional: small custom styles -->
  <style>
    /* keep focus outlines strong for accessibility */
    :focus { outline: 2px solid rgba(59,130,246,0.6); outline-offset: 2px; }
  </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-6">
  <main class="w-full max-w-md bg-white rounded-2xl shadow-lg p-7">
    <h1 class="text-2xl font-semibold mb-4 text-slate-800">Create an account</h1>
    <p class="text-sm text-slate-500 mb-6">Simple form with name, email and password using Tailwind.</p>

    <form id="signupForm" class="space-y-4" novalidate method="post" action="{{route('admin.store')}}">
        @csrf
      <!-- Name -->
      <div>
        <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Full name</label>
        <input
          id="name"
          name="name"
          type="text"
         
          minlength="2"
          placeholder="Your name"
          class="w-full px-4 py-2 rounded-lg border border-slate-200 shadow-sm focus:ring-2 focus:ring-slate-200"
        />
        <p class="mt-1 text-xs text-red-600 hidden" id="nameErr">Please enter your name (min 2 characters).</p>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email</label>
        <input
          id="email"
          name="email"
          type="email"
          
          placeholder="you@example.com"
          class="w-full px-4 py-2 rounded-lg border border-slate-200 shadow-sm focus:ring-2 focus:ring-slate-200"
        />
        <p class="mt-1 text-xs text-red-600 hidden" id="emailErr">Please provide a valid email address.</p>
      </div>

      <!-- Password with show/hide toggle -->
      <div>
        <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Password</label>
        <div class="relative">
          <input
            id="password"
            name="password"
            type="password"
            required
            minlength="6"
            placeholder="Enter a secure password"
            class="w-full px-4 py-2 rounded-lg border border-slate-200 shadow-sm focus:ring-2 focus:ring-slate-200 pr-12"
          />
          <button
            type="button"
            id="togglePwd"
            aria-label="Show password"
            class="absolute inset-y-0 right-1 px-2 py-1 rounded-md text-sm text-slate-600 hover:bg-slate-100"
          >Show</button>
        </div>
        <p class="mt-1 text-xs text-red-600 hidden" id="pwdErr">Password must be at least 6 characters.</p>
      </div>

      <!-- Submit -->
      <div>
        <button
          type="submit"
          class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 bg-slate-800 text-white rounded-lg shadow hover:bg-slate-900 focus:ring-2 focus:ring-offset-2 focus:ring-slate-300"
        >
          Sign up
        </button>
      </div>
    </form>

    <p class="mt-4 text-xs text-slate-500">By continuing you agree to our <a href="#" class="text-slate-800 underline">terms</a>.</p>
  </main>

  
</body>
</html>
