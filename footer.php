</main>
<footer>

</footer>

<!-- Auto Dark Mode -->
<script>
    // (() => {
    //     'use strict'

    //     const getStoredTheme = () => localStorage.getItem('theme')
    //     const setStoredTheme = theme => localStorage.setItem('theme', theme)

    //     const getPreferredTheme = () => {
    //         const storedTheme = getStoredTheme()
    //         if (storedTheme) {
    //             return storedTheme
    //         }

    //         return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    //     }

    //     const setTheme = theme => {
    //         if (theme === 'auto') {
    //             document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
    //         } else {
    //             document.documentElement.setAttribute('data-bs-theme', theme)
    //         }
    //     }

    //     setTheme(getPreferredTheme())

    //     const showActiveTheme = (theme, focus = false) => {
    //         const themeSwitcher = document.querySelector('#bd-theme')

    //         if (!themeSwitcher) {
    //             return
    //         }

    //         const themeSwitcherText = document.querySelector('#bd-theme-text')
    //         const activeThemeIcon = document.querySelector('.theme-icon-active use')
    //         const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    //         const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

    //         document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
    //             element.classList.remove('active')
    //             element.setAttribute('aria-pressed', 'false')
    //         })

    //         btnToActive.classList.add('active')
    //         btnToActive.setAttribute('aria-pressed', 'true')
    //         activeThemeIcon.setAttribute('href', svgOfActiveBtn)
    //         const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
    //         themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

    //         if (focus) {
    //             themeSwitcher.focus()
    //         }
    //     }

    //     window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    //         const storedTheme = getStoredTheme()
    //         if (storedTheme !== 'light' && storedTheme !== 'dark') {
    //             setTheme(getPreferredTheme())
    //         }
    //     })

    //     window.addEventListener('DOMContentLoaded', () => {
    //         showActiveTheme(getPreferredTheme())

    //         document.querySelectorAll('[data-bs-theme-value]')
    //             .forEach(toggle => {
    //                 toggle.addEventListener('click', () => {
    //                     const theme = toggle.getAttribute('data-bs-theme-value')
    //                     setStoredTheme(theme)
    //                     setTheme(theme)
    //                     showActiveTheme(theme, true)
    //                 })
    //             })
    //     })
    // })()
</script>
<!-- Light, Dark , System prefer  -->
<script>
    (() => {
        'use strict'

        const getStoredTheme = () => localStorage.getItem('theme')
        const setStoredTheme = theme => localStorage.setItem('theme', theme)

        const getPreferredTheme = () => {
            const storedTheme = getStoredTheme()
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        const setTheme = theme => {
            if (theme === 'auto') {
                document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        // const showActiveTheme = (theme) => {
        //     const activeOption = document.querySelector(`#theme-dropdown [data-bs-theme-value="${theme}"]`)
        //     const dropdownButton = document.getElementById('theme-dropdown-button')

        //     if (activeOption && dropdownButton) {
        //         dropdownButton.textContent = activeOption.textContent.trim()
        //     }
        // }
        const showActiveTheme = (theme) => {
            const activeOption = document.querySelector(`#theme-dropdown [data-bs-theme-value="${theme}"]`);
            const dropdownButton = document.getElementById('theme-dropdown-button');

            if (activeOption && dropdownButton) {
                // Get the SVG content from the active option
                const svgContent = activeOption.querySelector('svg').outerHTML;

                // Set the button's innerHTML to the SVG content
                dropdownButton.innerHTML = svgContent;
            }
        };

        setTheme(getPreferredTheme())

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            const storedTheme = getStoredTheme()
            if (storedTheme !== 'light' && storedTheme !== 'dark') {
                setTheme(getPreferredTheme())
            }
        })

        window.addEventListener('DOMContentLoaded', () => {
            showActiveTheme(getPreferredTheme())

            document.querySelectorAll('#theme-dropdown [data-bs-theme-value]').forEach(option => {
                option.addEventListener('click', () => {
                    const theme = option.getAttribute('data-bs-theme-value')
                    setStoredTheme(theme)
                    setTheme(theme)
                    showActiveTheme(theme)
                })
            })
        })
    })()
</script>
<!-- Form Validations -->
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
<?php wp_footer(); ?>
</body>

</html>