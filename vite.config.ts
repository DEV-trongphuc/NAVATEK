import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import tailwindcss from '@tailwindcss/vite'
import fs from 'fs'
import path from 'path'

// Function to scan all HTML files in the workspace root
const getHtmlInputs = () => {
  const inputs: Record<string, string> = {}
  const rootDir = process.cwd()
  const files = fs.readdirSync(rootDir)
  files.forEach(file => {
    if (file.endsWith('.html')) {
      const name = file.replace(/\.html$/, '')
      inputs[name] = path.resolve(rootDir, file)
    }
  })
  return inputs
}

// https://vite.dev/config/
export default defineConfig({
  plugins: [react(), tailwindcss()],
  build: {
    rollupOptions: {
      input: getHtmlInputs()
    }
  }
})

