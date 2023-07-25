import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/sass/app.scss',
        'resources/js/app.js',
      ],
      refresh: true,
    }),
  ],
  build: {
    minify: 'terser', // Включение минификации с помощью Terser
    terserOptions: {
      compress: {
        drop_console: true, // Удаление console.log в production
      },
    },
    rollupOptions: {
      treeshake: true, // Включение Tree Shaking
    },
  },
});