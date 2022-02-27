import { fileURLToPath, URL } from 'url'
import { resolve } from 'path'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    }
  },
  root: '.',
  build: {
    rollupOptions: {
      input: {
      // TODO: Add a step in the build process to add a line like this for every HTML file:
      // filename: resolve(__dirname, 'filename.html')
      }
    }
  }
})
