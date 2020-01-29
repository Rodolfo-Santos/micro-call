// Solicita a permissão para realizar as notificações
document.addEventListener('DOMContentLoaded', function () {
  if (Notification.permission !== "granted")
    Notification.requestPermission();
  });
  // Função para exibir as notificações
  function NofiticacaoGoogleChrome() {
  if (!Notification) {
    alert(
      'Notificações de área de trabalho que não estão disponíveis no seu navegador. Tente com o navegador Google Chrome'
    );
    return;
  }

  if (Notification.permission !== "granted")
    Notification.requestPermission();
};