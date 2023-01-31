const personas = document.querySelectorAll('[data-persona-target]')
const personaContents = document.querySelectorAll('[data-persona-content]')

personas.forEach(persona => {
    persona.addEventListener('click', () => {
        const target = document.querySelector(persona.dataset.personaTarget)
        personaContents.forEach(personaContent => {
            personaContent.classList.remove('active')
        })
        personas.forEach(persona => {
            persona.classList.remove('active')
        })
        persona.classList.add('active')
        target.classList.add('active')
        })
  })

  