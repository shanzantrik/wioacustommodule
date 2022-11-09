import React from 'react';
import ReactDOM from 'react-dom/client';
import App from './App';
// const root = () => {
//         return (
//                 <App />
//         )
// }
// render(<root />, document.querySelector('#my-react-target'));
const root = ReactDOM.createRoot(document.querySelector('#credential-tool-target'));
root.render(
        <React.StrictMode>
                <App />
        </React.StrictMode>
);
