var content = document.querySelector('.content'),
    wrapper = document.querySelector('.wrap'),
    shadowTop = document.querySelector('.top-shadow'),
    shadowBottom = document.querySelector('.bottom-shadow'),
    contentScrollHeight = content.scrollHeight - wrapper.offsetHeight;

content.addEventListener('scroll', function() {
    var currentScroll = this.scrollTop / (contentScrollHeight);
    shadowTop.style.opacity = currentScroll;
    shadowBottom.style.opacity = 1 - currentScroll;
});