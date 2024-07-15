import React from 'react';
import ReactDOM from 'react-dom/client';

function App() {
    return (
        <div>
            <h1>Hello, React!</h1>
        </div>
    );
}

export default App;

if (document.getElementById('app')) {
    alert("Yes");
   ReactDOM.render(<App />, document.getElementById('app'));
}