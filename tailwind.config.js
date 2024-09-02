/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        primary: { "50": "#eff6ff", "100": "#dbeafe", "200": "#bfdbfe", "300": "#93c5fd", "400": "#60a5fa", "500": "#3b82f6", "600": "#2563eb", "700": "#1d4ed8", "800": "#1e40af", "900": "#1e3a8a", "950": "#172554" },
        'lust': { "100": "#e31e25", "200": "#e9443f", "300": "#ef5f55", "400": "#f4756a", "500": "#f88a7f", "600": "#fc9f94", "700": "#feb2a9", "800": "#ffc6be", "900": "#ffd9d4", "950": "#ffece9" },
        'salt_rivers': { "100": "#4b90bc", "200": "#5e9bc3", "300": "#71a6ca", "400": "#83b1d1", "500": "#94bcd8", "600": "#a6c7de", "700": "#b8d2e5", "800": "#c9ddec", "900": "#dbe8f2", "950": "#edf4f9" },
        'dreams_spring': { "100": "#f8ce28", "200": "#f9d34f", "300": "#f9d96a", "400": "#fade80", "500": "#fbe394", "600": "#fce8a8", "700": "#fcedba", "800": "#fdf1cc", "900": "#fef6dd", "950": "#fefbee" },
        'funky_frog': { "100": "#91bd3d", "200": "#9cc456", "300": "#a6cb6c", "400": "#b1d280", "500": "#bcd893", "600": "#c7dfa5", "700": "#d2e5b7", "800": "#ddecc9", "900": "#e8f2db", "950": "#f4f9ed" },
        'corn':{"50":"#FFFFE7","100":"#FFFFC1","200":"#FFFB86","300":"#FFF041","400":"#FFE00D","500":"#EFC400","600":"#D19900","700":"#A66D02","800":"#98550A","900":"#74450F","950":"#442404"},
        'violetEggplant':{"50":"#FEF4FF","100":"#FBE9FE","200":"#F8D2FC","300":"#F6AEF9","400":"#F07EF4","500":"#E44DE8","600":"#CA2DCC","700":"#A922A7","800":"#932090","900":"#711E6D","950":"#4B0748"},
        'denim':{"50":"#ECF9FF","100":"#D5F0FF","200":"#B4E7FF","300":"#81DAFF","400":"#46C3FF","500":"#1CA2FF","600":"#0483FF","700":"#006BF7","800":"#065BD5","900":"#0C4A9C","950":"#0D2D5E"},
        'ecstasy':{"50":"#FEF7EE","100":"#FEECD6","200":"#FBD6AD","300":"#F8B879","400":"#F59042","500":"#F27829","600":"#E25714","700":"#BC4112","800":"#953417","900":"#782D16","950":"#411409"},
      }
    },
  },
  fontFamily: {
    'body': [ 'Inter' ],
    'sans': [ 'Inter' ],
    'monseratBlackBold': 'monseratBlackBold',
    'souceSansProRegular': ['souceSansProRegular','sans-serif'],
    'monseratBlack': ['monseratBlack', 'sans-serif'],
    monseratBlackBold: ['monseratBlackBold','sans-serif'],
    souceSansProRegular: ['souceSansProRegular','sans-serif'],
    monseratBlack: ['monseratBlack', 'sans-serif'],
  },
  plugins: [
    //require("tailwindcss-animate"),
    require('tailwindcss-animated'),
    // require('@tailwindcss/forms'),
  ],
}

