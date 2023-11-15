// conversation.js
var socket = new WebSocket('ws://yourserver/ws/conversation/');

socket.onmessage = function(e) {
    var data = JSON.parse(e.data);
    var message = data.message;
    // Proses pesan yang diterima dari server
};

// Fungsi untuk mengirim pesan
function sendMessage(message) {
    socket.send(JSON.stringify({ 'message': message }));
}
