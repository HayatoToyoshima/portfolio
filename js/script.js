document.getElementById('contact-form')?.addEventListener('submit', function (e) {
  e.preventDefault();

  const form = document.getElementById('contact-form');
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const message = document.getElementById('message').value.trim();

  const result = document.getElementById('message-result');
  result.style.color = 'red';

  if (name.length > 100 || email.length > 100) {
    result.textContent = 'お名前とメールアドレスは100文字以内でお願いします。';
    return;
  }

  if (message.length > 300) {
    result.textContent = 'お問い合わせ内容は300文字以内でお願いします。';
    return;
  }

  if (!email.match(/^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/)) {
    result.textContent = 'メールアドレスの形式が正しくありません。';
    return;
  }

  result.textContent = '';
  alert('お問い合わせを受け付けました。(仮)');
  form.reset(); 
});
