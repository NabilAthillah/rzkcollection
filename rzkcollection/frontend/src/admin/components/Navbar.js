const Navbar = () => {
    return (
        <nav role="nav" className="nav w-screen bg-white flex justify-between px-10 border-b-2 border-[#a6a6a6] h-16" id="navbar">
            <div className="navbar-left grid">
                <a href={'/#main-1'} className="grid">
                    <img alt="Logo" src={'/316609274_494526255980765_2425076201375607374_n-removebg-preview111.png'}
                        className="h-12 self-center" />
                </a>
            </div>
            <div className="navbar-right flex justify-end w-1/6">
                <a href={'/profile'} className="flex align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#a6a6a6"
                        className="bi bi-person-fill self-center" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>
                </a>
            </div>
        </nav>
    )
    }
    
    export default Navbar