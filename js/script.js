document.getElementById('contact-form')?.addEventListener('submit', function (e) {
  e.preventDefault();

  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const message = document.getElementById('message').value.trim();

  const result = document.getElementById('message-result');

  if (name.length > 100 || email.length > 100 || message.length > 100) {
    result.textContent = '入力はすべて100文字以内でお願いします。';
    return;
  }

  if (!email.match(/^[^@]+@[^@]+\.[^@]+$/)) {
    result.textContent = 'メールアドレスの形式が正しくありません。';
    return;
  }

  result.textContent = 'お問い合わせを受け付けました（仮）。';
});
