var chatbot = document.getElementById('snm-chatbot');

BotChat.App({
    directLine: { secret: 'ZV6P5JPfyAA.cwA.QxY.Cg5RbTmwyd8L35iCvTmVc68kNJ0wgAf-xQsYno4Cz6U' },
    user: { id: 'uživatel' },
    bot: { id: 'Lev Manovich' },
    sendTyping: true
}, chatbot);

document.querySelector('.wc-header').onclick = function() {
    chatbot.classList.toggle('snm-chatbot-active');
};