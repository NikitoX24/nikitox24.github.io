import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client' // para app web
import App from './App.tsx'                   // componente principal
// import "bootstrap/dist/css/bootstrap.min.css" // bootstrap

createRoot(document.getElementById('root')!).render(
  <StrictMode>
    <App />
  </StrictMode>,
)

// npm run build      >>>    JSX => Babel => React.createElement 