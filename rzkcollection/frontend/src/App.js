import Homepage from './pages/Homepage';
import Shoppage from './pages/Shoppage';
import Cartpage from './pages/Cartpage';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import './style/style.css'

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path='/' element={<Homepage />}/>
        <Route path='/shop' element={<Shoppage />}/>
        <Route path='/cart' element={<Cartpage />}/>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
