// XAMPP server configuration
// const SERVER_IP = 'localhost';
// const ROOT_FOLDER = 'toolshare-server';
// export const API_BASE = `http://${SERVER_IP}/${ROOT_FOLDER}/api/routes`;

// Laravel Local server configuration
// const SERVER_IP = '127.0.0.1';
// const SERVER_PORT = '8000'; // default for artisan serve
// export const API_BASE = `http://${SERVER_IP}:${SERVER_PORT}/api`;

// LAN server Config
// const SERVER_IP = '192.168.100.13';
// const SERVER_PORT = '8000'; // default for artisan serve
// export const API_BASE = `http://${SERVER_IP}:${SERVER_PORT}/api`;


// Get configuration from localStorage or use default values
const getServerConfig = () => {
    const savedConfig = localStorage.getItem('serverConfig');
    if (savedConfig) {
        const { ip, port } = JSON.parse(savedConfig);
        return { SERVER_IP: ip, SERVER_PORT: port };
    }
    // Default configuration
    return {
        SERVER_IP: '127.0.0.1',
        SERVER_PORT: '8000'
    };
};

const { SERVER_IP, SERVER_PORT } = getServerConfig();
export const API_BASE = `http://${SERVER_IP}:${SERVER_PORT}/api`;
