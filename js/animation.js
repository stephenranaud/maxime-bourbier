/**
 * @param {string} selector 
 * @param {IntersectionObserverInit} options 
 * @returns {void}
 */
export function appear(selector = '.appear', options = {}) {

    if (/^.[a-zA-Z]{2,10}/.test(selector)) {

        let intersection = new IntersectionObserver(function(entries) {
            entries.forEach(entrie => {

                if (entrie.isIntersecting) {
                    entrie.target.classList.remove(selector.slice(1));
                    entrie.target.classList.add(selector.slice(1) + "-visible");
                    intersection.unobserve(entrie.target);
                }
            });
        }, options);

        document.querySelectorAll(selector).forEach(element => {

            intersection.observe(element);
        });
    }
}
appear('.appear-right');
appear('.appear-left');
appear('.appear');