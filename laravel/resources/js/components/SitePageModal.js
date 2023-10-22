import { OPEN } from "../config/constants";
import { isInputEsc } from "../helpers/inputManager";


function SitePageModal() {
    const sitePageModals = document.querySelectorAll('.js-site-page-modal');
    const sitePages = document.querySelectorAll('.js-site-page');
    const pageBG = document.querySelectorAll('.js-site-page-modal-bg ');
 

    function openModal(props) {
        event.stopPropagation();
        
        let card = props.event.currentTarget;
        let image = card.querySelector('.js-image');

        let cardID = card.dataset.id;
        let imageVariationID = image.dataset.id;


        // GET Modal with the same ID as CARD ID
        sitePageModals.forEach(modal => {

            if(modal.dataset.id === cardID) {
                console.log("hi")
                // modal.classList.remove("hidden")
            }
        
        });

        // addEventListener('click', event => {
        //     if()
        // })
        
        // let image = card.querySelector('.js-image');
        // console.log(imagge)

        
        // sitePageModals.forEach(modal => {
        //     let bg = modal.querySelector('.js-site-page-modal-bg');
       
        //     if(modal.dataset.id === modalID) {
        //         modal.classList.remove('hidden')

        //         bg.addEventListener('click', event => {
        //             modal.classList.add('hidden')
        //         })
        //     }
                 
        // })


    }

    sitePages.forEach(pageCard => {
        pageCard.addEventListener('click', event => openModal({event}), true)
    })
    // if(!SitePageModalWrsap.length) return
    
    // const openSitePageModal = (event, menu) => {
    //     menu.classList.add(OPEN);
    // }

    // const closeSitePageModal = (event, menu) => {
    //     menu.classList.remove(OPEN)
    // }

    // const toggleSitePageModal = (event, menu, isOpen) => {
    //     menu.classList.toggle(OPEN)
    // }

    // function onClickAwayCloseSitePageModal(event, menu, button) {
    //     const clickInside = button.contains(event.target);

    //     if (!clickInside) {
    //         closeSitePageModal(event, menu);
    //     }
    // }

    // function isEscPressed(event, menu, button) {
    //     if(isInputEsc(event)) {
    //         closeSitePageModal(event, menu);
    //     }
    // }

    sitePageModals.forEach(modal => {
    //     const menu = wrap.querySelector('.js-SitePageModal-menu')
    //     const button = wrap.querySelector('.js-SitePageModal-button')
    //     const isOpen = wrap.classList.contains(OPEN)

    //     button.addEventListener('click', event => toggleSitePageModal(event, menu, isOpen));
    //     document.addEventListener('click', event => onClickAwayCloseSitePageModal(event, menu, button));
    //     document.addEventListener('keydown', event => isEscPressed(event, menu));
    })

    
}

export default SitePageModal;