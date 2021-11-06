
package webservice;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlType;

@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "personne", propOrder = {
    "admin",
    "login",
    "mdp",
    "nom",
    "prenom"
})
public class Personne {

    protected boolean admin;
    protected String login;
    protected String mdp;
    protected String nom;
    protected String prenom;

    
    public boolean isAdmin() {
        return admin;
    }

    
    public void setAdmin(boolean value) {
        this.admin = value;
    }

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

   
    public String getNom() {
        return nom;
    }

    
    public void setNom(String value) {
        this.nom = value;
    }

    
    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String value) {
        this.prenom = value;
    }

}
