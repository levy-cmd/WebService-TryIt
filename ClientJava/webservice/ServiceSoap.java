package webservice;

import java.util.List;
import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebResult;
import javax.jws.WebService;
import javax.xml.bind.annotation.XmlSeeAlso;
import javax.xml.ws.Action;
import javax.xml.ws.RequestWrapper;
import javax.xml.ws.ResponseWrapper;



@WebService(name = "ServiceSoap", targetNamespace = "http://service/")
@XmlSeeAlso({
    ObjectFactory.class
})
public interface ServiceSoap {
    /**
     * 
     * @return
     *     returns java.util.List<webservice.Personne>
     */
    @WebMethod
    @WebResult(targetNamespace = "")
    @RequestWrapper(localName = "listerEditeurs", targetNamespace = "http://service/", className = "webservice.ListerEditeurs")
    @ResponseWrapper(localName = "listerEditeursResponse", targetNamespace = "http://service/", className = "webservice.ListerEditeursResponse")
    @Action(input = "http://service/ServiceSoap/listerEditeursRequest", output = "http://service/ServiceSoap/listerEditeursResponse")
    public List<Personne> listerEditeurs();

    /**
     * 
     * @param arg0
     */
    @WebMethod
    @RequestWrapper(localName = "supprimerUser", targetNamespace = "http://service/", className = "webservice.SupprimerUser")
    @ResponseWrapper(localName = "supprimerUserResponse", targetNamespace = "http://service/", className = "webservice.SupprimerUserResponse")
    @Action(input = "http://service/ServiceSoap/supprimerUserRequest", output = "http://service/ServiceSoap/supprimerUserResponse")
    public void supprimerUser(
        @WebParam(name = "arg0", targetNamespace = "")
        Personne arg0);

    /**
     * 
     * @param arg0
     */
    @WebMethod
    @RequestWrapper(localName = "ajouterUser", targetNamespace = "http://service/", className = "webservice.AjouterUser")
    @ResponseWrapper(localName = "ajouterUserResponse", targetNamespace = "http://service/", className = "webservice.AjouterUserResponse")
    @Action(input = "http://service/ServiceSoap/ajouterUserRequest", output = "http://service/ServiceSoap/ajouterUserResponse")
    public void ajouterUser(
        @WebParam(name = "arg0", targetNamespace = "")
        Personne arg0);

    /**
     * 
     * @param mdp
     * @param login
     * @return
     *     returns boolean
     */
    @WebMethod
    @WebResult(targetNamespace = "")
    @RequestWrapper(localName = "connexionUser", targetNamespace = "http://service/", className = "webservice.ConnexionUser")
    @ResponseWrapper(localName = "connexionUserResponse", targetNamespace = "http://service/", className = "webservice.ConnexionUserResponse")
    @Action(input = "http://service/ServiceSoap/connexionUserRequest", output = "http://service/ServiceSoap/connexionUserResponse")
    public boolean connexionUser(
        @WebParam(name = "login", targetNamespace = "")
        String login,
        @WebParam(name = "mdp", targetNamespace = "")
        String mdp);

    /**
     * 
     * @param arg0
     */
    @WebMethod
    @RequestWrapper(localName = "nommerAdmin", targetNamespace = "http://service/", className = "webservice.NommerAdmin")
    @ResponseWrapper(localName = "nommerAdminResponse", targetNamespace = "http://service/", className = "webservice.NommerAdminResponse")
    @Action(input = "http://service/ServiceSoap/nommerAdminRequest", output = "http://service/ServiceSoap/nommerAdminResponse")
    public void nommerAdmin(
        @WebParam(name = "arg0", targetNamespace = "")
        Personne arg0);

    /**
     * 
     * @return
     *     returns java.util.List<webservice.Personne>
     */
    @WebMethod
    @WebResult(targetNamespace = "")
    @RequestWrapper(localName = "listerAdmins", targetNamespace = "http://service/", className = "webservice.ListerAdmins")
    @ResponseWrapper(localName = "listerAdminsResponse", targetNamespace = "http://service/", className = "webservice.ListerAdminsResponse")
    @Action(input = "http://service/ServiceSoap/listerAdminsRequest", output = "http://service/ServiceSoap/listerAdminsResponse")
    public List<Personne> listerAdmins();

    /**
     * 
     * @param arg0
     */
    @WebMethod
    @RequestWrapper(localName = "modifUser", targetNamespace = "http://service/", className = "webservice.ModifUser")
    @ResponseWrapper(localName = "modifUserResponse", targetNamespace = "http://service/", className = "webservice.ModifUserResponse")
    @Action(input = "http://service/ServiceSoap/modifUserRequest", output = "http://service/ServiceSoap/modifUserResponse")
    public void modifUser(
        @WebParam(name = "arg0", targetNamespace = "")
        Personne arg0);
}