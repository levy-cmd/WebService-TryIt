
package webservice;

import javax.xml.bind.JAXBElement;
import javax.xml.bind.annotation.XmlElementDecl;
import javax.xml.bind.annotation.XmlRegistry;
import javax.xml.namespace.QName;

@XmlRegistry
public class ObjectFactory {

    private final static QName _ConnexionUser_QNAME = new QName("http://service/", "connexionUser");
    private final static QName _AjouterUserResponse_QNAME = new QName("http://service/", "ajouterUserResponse");
    private final static QName _ListerAdmins_QNAME = new QName("http://service/", "listerAdmins");
    private final static QName _AjouterUser_QNAME = new QName("http://service/", "ajouterUser");
    private final static QName _NommerAdminResponse_QNAME = new QName("http://service/", "nommerAdminResponse");
    private final static QName _ListerEditeursResponse_QNAME = new QName("http://service/", "listerEditeursResponse");
    private final static QName _ConnexionUserResponse_QNAME = new QName("http://service/", "connexionUserResponse");
    private final static QName _ModifUserResponse_QNAME = new QName("http://service/", "modifUserResponse");
    private final static QName _NommerAdmin_QNAME = new QName("http://service/", "nommerAdmin");
    private final static QName _ModifUser_QNAME = new QName("http://service/", "modifUser");
    private final static QName _SupprimerUser_QNAME = new QName("http://service/", "supprimerUser");
    private final static QName _ListerEditeurs_QNAME = new QName("http://service/", "listerEditeurs");
    private final static QName _ListerAdminsResponse_QNAME = new QName("http://service/", "listerAdminsResponse");
    private final static QName _SupprimerUserResponse_QNAME = new QName("http://service/", "supprimerUserResponse");


    public ObjectFactory() {
    }

    public NommerAdmin createNommerAdmin() {
        return new NommerAdmin();
    }

   
    public ListerAdminsResponse createListerAdminsResponse() {
        return new ListerAdminsResponse();
    }

    
    public ListerEditeurs createListerEditeurs() {
        return new ListerEditeurs();
    }

    
    public SupprimerUserResponse createSupprimerUserResponse() {
        return new SupprimerUserResponse();
    }

    
    public SupprimerUser createSupprimerUser() {
        return new SupprimerUser();
    }

    
    public ModifUser createModifUser() {
        return new ModifUser();
    }

    public AjouterUserResponse createAjouterUserResponse() {
        return new AjouterUserResponse();
    }

    
    public ListerAdmins createListerAdmins() {
        return new ListerAdmins();
    }

    public ConnexionUser createConnexionUser() {
        return new ConnexionUser();
    }

    public ListerEditeursResponse createListerEditeursResponse() {
        return new ListerEditeursResponse();
    }

    public ConnexionUserResponse createConnexionUserResponse() {
        return new ConnexionUserResponse();
    }

    public ModifUserResponse createModifUserResponse() {
        return new ModifUserResponse();
    }

    /**
     * Create an instance of {@link AjouterUser }
     * 
     */
    public AjouterUser createAjouterUser() {
        return new AjouterUser();
    }

    public NommerAdminResponse createNommerAdminResponse() {
        return new NommerAdminResponse();
    }

    public Personne createPersonne() {
        return new Personne();
    }

    @XmlElementDecl(namespace = "http://service/", name = "connexionUser")
    public JAXBElement<ConnexionUser> createConnexionUser(ConnexionUser value) {
        return new JAXBElement<ConnexionUser>(_ConnexionUser_QNAME, ConnexionUser.class, null, value);
    }

    @XmlElementDecl(namespace = "http://service/", name = "ajouterUserResponse")
    public JAXBElement<AjouterUserResponse> createAjouterUserResponse(AjouterUserResponse value) {
        return new JAXBElement<AjouterUserResponse>(_AjouterUserResponse_QNAME, AjouterUserResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link ListerAdmins }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "listerAdmins")
    public JAXBElement<ListerAdmins> createListerAdmins(ListerAdmins value) {
        return new JAXBElement<ListerAdmins>(_ListerAdmins_QNAME, ListerAdmins.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link AjouterUser }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "ajouterUser")
    public JAXBElement<AjouterUser> createAjouterUser(AjouterUser value) {
        return new JAXBElement<AjouterUser>(_AjouterUser_QNAME, AjouterUser.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link NommerAdminResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "nommerAdminResponse")
    public JAXBElement<NommerAdminResponse> createNommerAdminResponse(NommerAdminResponse value) {
        return new JAXBElement<NommerAdminResponse>(_NommerAdminResponse_QNAME, NommerAdminResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link ListerEditeursResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "listerEditeursResponse")
    public JAXBElement<ListerEditeursResponse> createListerEditeursResponse(ListerEditeursResponse value) {
        return new JAXBElement<ListerEditeursResponse>(_ListerEditeursResponse_QNAME, ListerEditeursResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link ConnexionUserResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "connexionUserResponse")
    public JAXBElement<ConnexionUserResponse> createConnexionUserResponse(ConnexionUserResponse value) {
        return new JAXBElement<ConnexionUserResponse>(_ConnexionUserResponse_QNAME, ConnexionUserResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link ModifUserResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "modifUserResponse")
    public JAXBElement<ModifUserResponse> createModifUserResponse(ModifUserResponse value) {
        return new JAXBElement<ModifUserResponse>(_ModifUserResponse_QNAME, ModifUserResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link NommerAdmin }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "nommerAdmin")
    public JAXBElement<NommerAdmin> createNommerAdmin(NommerAdmin value) {
        return new JAXBElement<NommerAdmin>(_NommerAdmin_QNAME, NommerAdmin.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link ModifUser }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "modifUser")
    public JAXBElement<ModifUser> createModifUser(ModifUser value) {
        return new JAXBElement<ModifUser>(_ModifUser_QNAME, ModifUser.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link SupprimerUser }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "supprimerUser")
    public JAXBElement<SupprimerUser> createSupprimerUser(SupprimerUser value) {
        return new JAXBElement<SupprimerUser>(_SupprimerUser_QNAME, SupprimerUser.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link ListerEditeurs }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "listerEditeurs")
    public JAXBElement<ListerEditeurs> createListerEditeurs(ListerEditeurs value) {
        return new JAXBElement<ListerEditeurs>(_ListerEditeurs_QNAME, ListerEditeurs.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link ListerAdminsResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "listerAdminsResponse")
    public JAXBElement<ListerAdminsResponse> createListerAdminsResponse(ListerAdminsResponse value) {
        return new JAXBElement<ListerAdminsResponse>(_ListerAdminsResponse_QNAME, ListerAdminsResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link SupprimerUserResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service/", name = "supprimerUserResponse")
    public JAXBElement<SupprimerUserResponse> createSupprimerUserResponse(SupprimerUserResponse value) {
        return new JAXBElement<SupprimerUserResponse>(_SupprimerUserResponse_QNAME, SupprimerUserResponse.class, null, value);
    }

}
