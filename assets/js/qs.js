class collapse {
    constructor(triggerId, targetIds) {
        this.triggerId = triggerId;
        this.targetId = targetIds;

        this.triggerId.addEventListener('click', () => this.collapses());
    }

    collapses() {
        this.targetId.forEach(element => element.classList.toggle('hidden'));
    }
}

function makeCollapse(triggerId, targetIds) {
    var triggerElement = document.getElementById(triggerId);
    var targetElements = targetIds.map(id => document.getElementById(id));

    new collapse(triggerElement, targetElements);
}

makeCollapse('quemSomosTitle', ['quemSomosDescription', 'quemSomosDescription2']);
makeCollapse('missãoTitle', ['missãoDescription']);
makeCollapse('visãoTitle', ['visãoDescription']);
makeCollapse('valoresTitle', ['valoresDescription']);
makeCollapse('menu-collapse', ['button-list']);