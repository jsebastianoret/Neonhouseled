const questions = document.querySelectorAll('.question');
questions.forEach((question) => {
    const title = question.querySelector('h3');
    const answer = question.querySelector('.answer');
    const i = question.querySelector('i');
    title.addEventListener('click', () => {
        answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
        i.classList.toggle('rotate');
    });
});

const searchIcon = document.querySelector('.search-icon');
const searchInput = document.querySelector('.search-input');
searchIcon.addEventListener('click', () => {
    searchInput.focus();
});



document.addEventListener("keyup", e => {
    if (e.target.matches('.search-input')) {
        if (e.key === "Escape") e.target.value = ""
        document.querySelectorAll('.question').forEach(pregunta => {
            pregunta.textContent.toLowerCase().includes(e.target.value.toLowerCase()) ?
                pregunta.classList.remove('filtro') :
                pregunta.classList.add('filtro')
        })
    }
})
