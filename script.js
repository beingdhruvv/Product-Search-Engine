/**
 * Product Search Engine JavaScript
 * Handles real-time search, filtering, and dynamic content loading
 */

// Wait for DOM to be fully loaded before executing
document.addEventListener("DOMContentLoaded", () => {
    // Cache DOM elements for better performance
    const elements = {
        searchBox: document.getElementById("search-box"),
        brandFilter: document.getElementById("brand-filter"),
        sortOrder: document.getElementById("sort-order"),
        clearFilters: document.getElementById("clear-filters"),
        results: document.getElementById("results")
    };

    /**
     * Debounce function to limit the rate at which a function can fire
     * @param {Function} func - The function to debounce
     * @param {number} delay - The delay in milliseconds
     * @returns {Function} - Debounced function
     */
    const debounce = (func, delay) => {
        let timer;
        return (...args) => {
            clearTimeout(timer);
            timer = setTimeout(() => func(...args), delay);
        };
    };

    /**
     * Fetches search results from the server based on current filters
     * Updates the results container with the response
     */
    const fetchResults = () => {
        // Create URL parameters from current filter values
        const params = new URLSearchParams({
            search: elements.searchBox.value,
            brand: elements.brandFilter.value,
            sort: elements.sortOrder.value
        });

        // Show loading state
        elements.results.innerHTML = '<div class="loading">Loading...</div>';

        // Fetch and update results
        fetch(`fetch_results.php?${params}`)
            .then(response => response.ok ? response.text() : Promise.reject('Network error'))
            .then(data => elements.results.innerHTML = data)
            .catch(error => elements.results.innerHTML = `<div class="error">Error loading results: ${error}</div>`);
    };

    /**
     * Resets all filters to their default values and fetches fresh results
     */
    const clearAllFilters = () => {
        elements.searchBox.value = '';
        elements.brandFilter.value = '';
        elements.sortOrder.value = 'name ASC';
        fetchResults();
    };

    // Event Listeners
    // Debounced search input to prevent excessive API calls
    elements.searchBox.addEventListener("input", debounce(fetchResults, 300));
    // Immediate updates for dropdown changes
    elements.brandFilter.addEventListener("change", fetchResults);
    elements.sortOrder.addEventListener("change", fetchResults);
    // Clear filters button
    elements.clearFilters.addEventListener("click", clearAllFilters);

    // Initial load of results
    fetchResults();
});
