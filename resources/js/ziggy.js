    var Ziggy = {
        namedRoutes: {"login":{"uri":"login","methods":["GET","HEAD"],"domain":null},"logout":{"uri":"logout","methods":["POST"],"domain":null},"password.request":{"uri":"forgot-password","methods":["GET","HEAD"],"domain":null},"password.email":{"uri":"forgot-password","methods":["POST"],"domain":null},"password.reset":{"uri":"reset-password\/{token}","methods":["GET","HEAD"],"domain":null},"password.update":{"uri":"reset-password","methods":["POST"],"domain":null},"user-profile-information.update":{"uri":"user\/profile-information","methods":["PUT"],"domain":null},"user-password.update":{"uri":"user\/password","methods":["PUT"],"domain":null},"password.confirm":{"uri":"user\/confirm-password","methods":["GET","HEAD"],"domain":null},"password.confirmation":{"uri":"user\/confirmed-password-status","methods":["GET","HEAD"],"domain":null},"two-factor.login":{"uri":"two-factor-challenge","methods":["GET","HEAD"],"domain":null},"profile.show":{"uri":"user\/profile","methods":["GET","HEAD"],"domain":null},"other-browser-sessions.destroy":{"uri":"user\/other-browser-sessions","methods":["DELETE"],"domain":null},"current-user.destroy":{"uri":"user","methods":["DELETE"],"domain":null},"current-user-photo.destroy":{"uri":"user\/profile-photo","methods":["DELETE"],"domain":null},"api-tokens.index":{"uri":"user\/api-tokens","methods":["GET","HEAD"],"domain":null},"api-tokens.store":{"uri":"user\/api-tokens","methods":["POST"],"domain":null},"api-tokens.update":{"uri":"user\/api-tokens\/{token}","methods":["PUT"],"domain":null},"api-tokens.destroy":{"uri":"user\/api-tokens\/{token}","methods":["DELETE"],"domain":null},"contact.store":{"uri":"contact","methods":["POST"],"domain":null},"download":{"uri":"download\/{file}","methods":["GET","HEAD"],"domain":null},"contact.list":{"uri":"contact\/list","methods":["GET","HEAD"],"domain":null},"contact.view":{"uri":"contact\/{contact}","methods":["GET","HEAD"],"domain":null},"contact.trash":{"uri":"contact\/{contact}","methods":["DELETE"],"domain":null},"contact.trash.list":{"uri":"contact\/list\/trash","methods":["GET","HEAD"],"domain":null},"contact.restore":{"uri":"contact\/{contact}\/restore","methods":["DELETE"],"domain":null},"contact.destroy":{"uri":"contact\/{contact}\/destroy","methods":["DELETE"],"domain":null}},
        baseUrl: 'http://ogmmanuel/',
        baseProtocol: 'http',
        baseDomain: 'ogmmanuel',
        basePort: false,
        defaultParameters: []
    };

    if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
        for (var name in window.Ziggy.namedRoutes) {
            Ziggy.namedRoutes[name] = window.Ziggy.namedRoutes[name];
        }
    }

    export {
        Ziggy
    }
