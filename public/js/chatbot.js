// Cek atau buat session_id di localStorage
function generateSessionId() {
	return "sess-" + Math.random().toString(36).substr(2, 9);
}

if (!localStorage.getItem("session_id")) {
	localStorage.setItem("session_id", generateSessionId());
}

let currentSessionId = localStorage.getItem("session_id");

//Jalankan chatbot
$(document).ready(function () {
	if (!sessionStorage.getItem("message_count")) {
		sessionStorage.setItem("message_count", 0);
	}

	$(document).on("click", "#rating-stars .star", function () {
		let selectedRating = $(this).data("value");
		$(this).siblings().removeClass("selected");
		$(this).prevAll().addBack().addClass("selected");
		$("#rating-stars").attr("data-selected-rating", selectedRating);
	});

	$("#chatbot-toggle").click(function () {
		$("#chatbot-container").fadeToggle();
		if ($("#chatbot-messages").is(":empty")) {
			$.ajax({
				url: "http://127.0.0.1:5001/get_intro",
				method: "GET",
				success: function (res) {
					$("#chatbot-messages").append(`
				  <div class="chatbot-message bot-msg">${res.intro}</div>
				`);
				},
				error: function () {
					$("#chatbot-messages").append(`
				  <div class="chatbot-message bot-msg">Halo Bunda! 👩‍🍼✨ Ada yang bisa saya bantu hari ini? 🌸</div>
				`);
				},
			});
		}
	});

	$("#chatbot-send").click(sendMessage);
	$("#chatbot-input").keypress(function (e) {
		if (e.which == 13) sendMessage();
	});

	function sendMessage() {
		let userMsg = $("#chatbot-input").val().trim();
		if (userMsg === "") return;

		let messageCount = 0;

		$("#chatbot-messages").append(
			`<div class="chatbot-message-wrapper right">
      <div class="chatbot-message user-msg">${userMsg}</div></div>`
		);
		$("#chatbot-input").val("");
		scrollBottom();
		showTyping();

		$.ajax({
			url: "http://127.0.0.1:5001/ask",
			method: "POST",
			contentType: "application/json",
			data: JSON.stringify({
				query: userMsg,
				session_id: currentSessionId, // Kirim session_id di setiap request
			}),
			success: function (res) {
				hideTyping();
				$("#chatbot-messages").append(
					`<div class="chatbot-message-wrapper left">
          <div class="chatbot-message bot-msg">${res.response}</div></div>`
				);
				scrollBottom();

				// Tambahkan counter message
				messageCount = parseInt(sessionStorage.getItem("message_count")) + 1;
				sessionStorage.setItem("message_count", messageCount);

				// Tampilkan form ulasan
				if (messageCount === 5) {
					tampilkanFormUlasan();
				}
			},
			error: function () {
				hideTyping();
				$("#chatbot-messages").append(
					`<div class="chatbot-message bot-msg">❌ Terjadi kesalahan.</div>`
				);
				scrollBottom();
			},
		});
	}

	function tampilkanFormUlasan() {
		$("#chatbot-messages").append(`
		<div class="chatbot-message-wrapper left">
		<div class="chatbot-message bot-msg ulasan-box">
			<p>Bagaimana layanan MaminaCare hari ini? Beri kami rating ya! ✨</p>
			<div id="rating-stars" style="font-size:22px; margin-bottom:8px;">
			<span class="star" data-value="1">&#9734;</span>
			<span class="star" data-value="2">&#9734;</span>
			<span class="star" data-value="3">&#9734;</span>
			<span class="star" data-value="4">&#9734;</span>
			<span class="star" data-value="5">&#9734;</span>
			</div>
			<textarea id="komentar" class="form-control mb-2 ulasan-text" rows="2" placeholder="Tulis pendapat kamu..."></textarea>
			<button onclick="kirimUlasan()" class="ulasan-button">Kirim Ulasan</button>
		</div>
		</div>
	`);
		scrollBottom();
	}

	function scrollBottom() {
		let msgBox = $("#chatbot-body");
		msgBox.scrollTop(msgBox[0].scrollHeight);
	}

	function showTyping() {
		$("#chatbot-typing").show();
	}

	function hideTyping() {
		$("#chatbot-typing").hide();
	}
});

window.kirimUlasan = function () {
	let rating = $("#rating-stars").attr("data-selected-rating");
	let komentar = $("#komentar").val();

	if (!rating) {
		alert("Pilih rating dulu ya!");
		return;
	}

	$.ajax({
		url: "http://127.0.0.1:5001/simpan_ulasan",
		method: "POST",
		contentType: "application/json",
		data: JSON.stringify({
			session_id: currentSessionId,
			rating: rating,
			komentar: komentar,
		}),
		success: function () {
			$("#chatbot-messages").append(`
        <div class="chatbot-message-wrapper left">
          <div class="chatbot-message bot-msg">Terima kasih ulasannya! 🌸</div>
        </div>
      `);
			scrollBottom();
			// // Disable form ulasan setelah kirim
			// $("#rating-stars .star")
			// 	.css("pointer-events", "none")
			// 	.css("opacity", "0.5");
			// $("#komentar").prop("disabled", true);
			// $(".ulasan-button")
			// 	.prop("disabled", true)
			// 	.css("opacity", "0.6")
			// 	.text("Ulasan Terkirim");
		},
	});
};

// Hilangkan bubble setelah 6 detik
setTimeout(function () {
	document.getElementById("chatbot-bubble").style.display = "none";
}, 6000);
