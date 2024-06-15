import React, { useState } from 'react';
import { Link, Outlet, useNavigate, useLocation } from 'react-router-dom';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faBars, faUserInjured, faCalendarAlt, faSignOutAlt } from '@fortawesome/free-solid-svg-icons';

const ReceptionistDashboard = ({ currentUser, users, setUsers }) => {
    const [isSidebarOpen, setIsSidebarOpen] = useState(true);
    const navigate = useNavigate();
    const location = useLocation();

    const handleLogout = () => {
        // Perform logout action here (e.g., clear session, reset authentication state)
        navigate('/');
    };

    const toggleSidebar = () => {
        setIsSidebarOpen(!isSidebarOpen);
    };

    React.useEffect(() => {
        if (!currentUser) {
            navigate('/');
        }
    }, [currentUser, navigate]);

    React.useEffect(() => {
        if (currentUser) {
            navigate('patients');
        }
    }, []);

    const navItems = [
        { path: 'patients', icon: faUserInjured, label: 'Patient Management' },
        { path: 'appointments', icon: faCalendarAlt, label: 'Appointment Management' },
    ];

    return (
        <div className="d-flex">
            <nav className={`text-white ${isSidebarOpen ? 'col-md-3 col-lg-2' : 'p-0'} d-md-block sidebar transition-all duration-300`} style={{ minHeight: '100vh', backgroundColor: '#1679AB' }}>
                <div className="position-sticky">
                    <div className="d-flex justify-content-between align-items-center p-3">
                        <h5 className={`m-0 ${isSidebarOpen ? '' : 'd-none'}`}>Receptionist Dashboard</h5>
                        <button className="btn btn-link text-white" onClick={toggleSidebar}>
                            <FontAwesomeIcon icon={faBars} />
                        </button>
                    </div>
                    <hr className="bg-secondary" />
                    <ul className="nav flex-column mb-auto">
                        {navItems.map((item) => (
                            <li className="nav-item py-1" key={item.path}>
                                <Link to={item.path} className={`nav-link text-white d-flex align-items-center ${location.pathname.includes(item.path) ? 'active bg-primary' : ''}`}>
                                    <FontAwesomeIcon icon={item.icon} className={`me-3 ${isSidebarOpen ? '' : 'fs-5'}`} />
                                    {isSidebarOpen && <span>{item.label}</span>}
                                </Link>
                            </li>
                        ))}
                    </ul>
                </div>
            </nav>

            <main className={`flex-grow-1 ${isSidebarOpen ? 'col-md-9 col-lg-10' : ''} bg-light`}>
                <nav className="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
                    <div className="container-fluid">
                        <h4 className="m-0">Welcome, {currentUser.name}</h4>
                        <ul className="navbar-nav ms-auto">
                            <li className="nav-item">
                                <button className="btn btn-outline-danger" onClick={handleLogout}>
                                    <FontAwesomeIcon icon={faSignOutAlt} className="me-2" /> Logout
                                </button>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div className="container-fluid p-4">
                    <Outlet context={{ users, setUsers }} />
                </div>
            </main>
        </div>
    );
};

export default ReceptionistDashboard;
