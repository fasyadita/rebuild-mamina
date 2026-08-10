<!-- Chatbot CSS -->
<link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">

<div id="chatbot-toggle"><img src="{{ asset('img/live-chat.png') }}" alt="Chatbot" style="width: 30px; height: 30px;"></div>

<div id="chatbot-container">
  <div id="chatbot-header">MaminaCare 🤖</div>

  <div id="chatbot-body">
    <div id="chatbot-messages"></div>
    <div id="chatbot-typing" class="chatbot-message bot-msg typing-indicator" style="display: none">
      <span></span><span></span><span></span>
    </div>
  </div>

  <div id="chatbot-footer">
    <input type="text" id="chatbot-input" placeholder="Tanyakan..">
    <button id="chatbot-send">Kirim</button>
  </div>
</div>

<div id="chatbot-bubble">
    👩‍🍼 Halo Bunda! Butuh info layanan Mamina? Klik aku ya ✨
</div>

<!-- Chatbot JS -->
<script src="{{ asset('js/chatbot.js') }}"></script>
