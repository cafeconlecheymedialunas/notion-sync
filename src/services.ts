export const showAvatar = async () => {

    const token = "secret_uPBBR6snphU8rKertMWty82DqrUNgGcVe4PJf5fCCSi"
    // leer nuestro JSON
    let response = await fetch('https://api.notion.com/v1/search', {
        headers: {
            "Authentication": "Bearer " + token,
            "Notion-Version": "2022-06-28"
        },
        body: JSON.stringify({
            "filter": {
                "value": "database",
                "property": "object"
            }
        })
    });
    let databases = await response.json();
    return databases
}

