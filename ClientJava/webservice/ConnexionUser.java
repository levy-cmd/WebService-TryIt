
package webservice;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlType;


@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "connexionUser", propOrder = {
    "login",
    "mdp"
})
public class ConnexionUser {

    protected String login;
    protected String mdp;

    public String getLogin() {
        return login;
    }

    public void setLogin(String value) {
        this.login = value;
    }

    public String getMdp() {
        return mdp;
    }

    public void setMdp(String value) {
        this.mdp = value;
    }

}
