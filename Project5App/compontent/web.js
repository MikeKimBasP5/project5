import React, { Component } from 'react';
import { WebView } from 'react-native-webview';

const App = () => {
    return (
            <WebView
                source={{ uri: 'https://mikehaenen.nl/project5/public/login' }}
                style={{ marginTop: 20 }}
            />
    );
}
export default App;