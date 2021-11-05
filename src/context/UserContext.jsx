import React, { createContext } from 'react'

export const UserContext = createContext()

const UserProvider = (props) => {
    const data = {}
    return (
      <UserContext.Provider value={data}>{props.children}</UserContext.Provider>
    );
}

export default UserProvider
