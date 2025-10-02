function displayTime() {
    const now = new Date();
    document.getElementById("time").innerText = "現在の時刻: " + now.toLocaleTimeString();
    }