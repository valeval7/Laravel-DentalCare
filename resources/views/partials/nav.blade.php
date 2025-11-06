<!-- Aqui se realizara los tipos de menu-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
  <header class="sticky top-0  z-20">
    <div
      class="Menu1 flex justify-between bg-white items-center border-[3px] border-[#7ba5c3] px-4 sm:px-6 md:px-8  py-2 sm:py-3  rounded-full lg:hidden relative">

      <a href="{{ route('inicio') }}">
        <img src="https://raw.githubusercontent.com/valeval7/Practicas/6df9610117feb8eb1597c6999923c24b514a291e/12%20Desarrollo%20de%20Página%20Web/Resources/DentalCare.svg"
          alt="DentalCare MX Logo"
          class="h-[35px] sm:h-[45px] md:h-[55px] lg:h-[60px]" />
      </a>

      <button
        class="menuBtn flex flex-col gap-1.5 hover:opacity-70 transition-opacity">
        <span class="w-6 sm:w-7 md:w-8 h-0.5 bg-[#7ba5c3] rounded"></span>
        <span class="w-6 sm:w-7 md:w-8 h-0.5 bg-[#7ba5c3] rounded"></span>
        <span class="w-6 sm:w-7 md:w-8 h-0.5 bg-[#7ba5c3] rounded"></span>
      </button>

      <div
        class="menuDropdown hidden absolute top-full right-0 mt-4 bg-white border-[3px] border-[#7ba5c3] rounded-3xl shadow-lg py-4 px-6 z-10 w-48">
        <nav class="flex flex-col gap-3">
          <a
            href="{{ route('sonrisa') }}"
            class="text-[#5175A0] hover:text-[#5DABDA] font-semibold transition-colors">Tu Sonrisa</a>
          <a
            href="{{ route('agendar') }}"
            class="text-[#5175A0] hover:text-[#5DABDA] font-semibold transition-colors">Agendar</a>
        </nav>
      </div>
    </div>
  </header>

  <header class="sticky top-0 z-20 mb-5 mt-5 hidden lg:block">
    <div
      class="Menu2 flex justify-between items-center border-[3px] border-[#7ba5c3] px-4 sm:px-6 md:px-8 lg:px-10 py-2 sm:py-3 rounded-full shadow-md bg-white ">
      <a href="{{ route('inicio') }}">
        <img
          src="https://raw.githubusercontent.com/valeval7/Practicas/6df9610117feb8eb1597c6999923c24b514a291e/12%20Desarrollo%20de%20Página%20Web/Resources/DentalCare.svg"
          alt="DentalCare MX Logo"
          class="h-[35px] sm:h-[45px] md:h-[55px] lg:h-[60px]" />
      </a>

      <nav class="hidden lg:flex gap-6 xl:gap-8">
        <a
          href="{{ route('sonrisa') }}"
          class="text-[#5175A0] hover:text-[#5DABDA] font-semibold transition-colors">Tu Sonrisa</a>
        <a
          href="{{ route('agendar') }}"
          class="text-[#5175A0] hover:text-[#5DABDA] font-semibold transition-colors">Agendar</a>
      </nav>

      <button
        class="menuBtn lg:hidden flex flex-col gap-1.5 hover:opacity-70 transition-opacity">
        <span class="w-6 sm:w-7 h-0.5 bg-[#7ba5c3] rounded"></span>
        <span class="w-6 sm:w-7 h-0.5 bg-[#7ba5c3] rounded"></span>
        <span class="w-6 sm:w-7 h-0.5 bg-[#7ba5c3] rounded"></span>
      </button>

      <div
        class="menuDropdown hidden absolute top-full right-0 mt-4 bg-white border-[3px] border-[#7ba5c3] rounded-3xl shadow-lg py-4 px-6 z-10 w-48">
        <nav class="flex flex-col gap-3">
          <a
            href="{{ route('sonrisa') }}"
            class="text-[#5175A0] hover:text-[#5DABDA] font-semibold transition-colors">Tu Sonrisa</a>
          <a
            href="{{ route('agendar') }}"
            class="text-[#5175A0] hover:text-[#5DABDA] font-semibold transition-colors">Agendar</a>
        </nav>
      </div>
    </div>
  </header>

</body>

</html>