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
      }
    },
  },
  fontFamily: {
    'body': [
      'Inter',
      'ui-sans-serif',
      'system-ui',
      '-apple-system',
      'system-ui',
      'Segoe UI',
      'Roboto',
      'Helvetica Neue',
      'Arial',
      'Noto Sans',
      'sans-serif',
      'Apple Color Emoji',
      'Segoe UI Emoji',
      'Segoe UI Symbol',
      'Noto Color Emoji'
    ],
    'sans': [
      'Inter',
      'ui-sans-serif',
      'system-ui',
      '-apple-system',
      'system-ui',
      'Segoe UI',
      'Roboto',
      'Helvetica Neue',
      'Arial',
      'Noto Sans',
      'sans-serif',
      'Apple Color Emoji',
      'Segoe UI Emoji',
      'Segoe UI Symbol',
      'Noto Color Emoji'
    ]
  },
  plugins: [
    //require("tailwindcss-animate"),
    require('tailwindcss-animated'),
    // require('@tailwindcss/forms'),
  ],
}

