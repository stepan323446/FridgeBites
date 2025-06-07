"use strict";
/**
 * Send ajax action to server
 * @param {string} action 
 * @param {Object} args 
 * @param {Function} onLoad 
 * @param {Function} onSuccess 
 * @param {Function} onError 
 */
function sendAjax(action, 
    args = [ ],
    onLoad = () => { }, 
    onSuccess = (data) => { }, 
    onError = (error) => { }) {
    
    onLoad();
    
    fetch('/ajax', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            'action': action,
            'args': args
        })
    })
    .then(response => response.json().then(data => ({ data, response })))
    .then(({ data, response }) => {
        if (!response.ok) {
            throw new Error(data.error || `HTTP error! Status: ${response.status}`);
        }
    
        onSuccess(data);
    })
    .catch(error => {
        onError(error);
    });
}
function showToastify(message, type = "info") {
    Toastify({
        text: message,
        gravity: "bottom",
        position: "left",
        className: type,
        duration: 3000 })
    .showToast();
}
