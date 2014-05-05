from ws4py.websocket import WebSocket

class EchoWebSocket(WebSocket):
    def received_message(self, message):
        self.send(message.data, message.is_binary)