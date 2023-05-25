import Homepage from './pages/Homepage';
import Shoppage from './pages/Shoppage';
import Cartpage from './pages/Cartpage';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Adminpage from './admin/pages/Homeadmin';
import './style/style.css'
import Myproduct from './admin/pages/Myproduct';
import OutOfStock from './admin/pages/OutOfStock';

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path='/' element={<Homepage />}/>
        <Route path='/shop' element={<Shoppage />}/>
        <Route path='/cart' element={<Cartpage />}/>
        <Route path='/private/admin/admins' element={<Adminpage />}/>
        <Route path='/private/admin/admins/myproducts' element={<Myproduct />}/>
        <Route path='/private/admin/admins/myproducts/outofstock' element={<OutOfStock />}/>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
