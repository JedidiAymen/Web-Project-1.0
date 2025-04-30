document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.gallery-track');
    const items = document.querySelectorAll('.gallery-item');
    const itemWidth = items[0].offsetWidth + parseInt(window.getComputedStyle(items[0]).marginRight);
    
    const cloneCount = Math.ceil(window.innerWidth / itemWidth) + 1;
    for (let i = 0; i < cloneCount; i++) {
        const clone = items[i % items.length].cloneNode(true);
        track.appendChild(clone);
    }
    
    let currentPosition = 0;
    let animationId;
    const speed = 1;
    const animationDuration = 500;
    
    function animate() {
        currentPosition -= speed;
        
        if (currentPosition <= -itemWidth * items.length) {
            track.style.transition = 'none';
            currentPosition = 0;
            track.style.transform = `translateX(${currentPosition}px)`;
            void track.offsetWidth;
            track.style.transition = `transform ${animationDuration}ms ease-in-out`;
        }
        
        track.style.transform = `translateX(${currentPosition}px)`;
        animationId = requestAnimationFrame(animate);
    }
    
    setTimeout(() => {
        track.style.transition = `transform ${animationDuration}ms ease-in-out`;
        animate();
    }, 100);
    
    track.addEventListener('mouseenter', () => {
        cancelAnimationFrame(animationId);
    });
    
    track.addEventListener('mouseleave', () => {
        animate();
    });
});
