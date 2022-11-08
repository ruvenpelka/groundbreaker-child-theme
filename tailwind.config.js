module.exports = {
  presets: [
    require('../groundbreaker/tailwind.config')
  ],
  important: true,
  content: [
    '../groundbreaker/**/*.php',
    './**/*.php',
    './tailwind.safelist.txt',
  ],
}
