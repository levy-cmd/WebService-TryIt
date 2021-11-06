package webservice;

import java.net.MalformedURLException;
import java.net.URL;
import javax.xml.namespace.QName;
import javax.xml.ws.Service;
import javax.xml.ws.WebEndpoint;
import javax.xml.ws.WebServiceClient;
import javax.xml.ws.WebServiceException;
import javax.xml.ws.WebServiceFeature;


@WebServiceClient(name = "ServiceSoapService", targetNamespace = "http://service/", wsdlLocation = "http://localhost:8787/ServerSoap?wsdl")
public class ServiceSoapService
    extends Service
{

    private final static URL SERVICESOAPSERVICE_WSDL_LOCATION;
    private final static WebServiceException SERVICESOAPSERVICE_EXCEPTION;
    private final static QName SERVICESOAPSERVICE_QNAME = new QName("http://service/", "ServiceSoapService");

    static {
        URL url = null;
        WebServiceException e = null;
        try {
            url = new URL("http://localhost:8787/ServerSoap?wsdl");
        } catch (MalformedURLException ex) {
            e = new WebServiceException(ex);
        }
        SERVICESOAPSERVICE_WSDL_LOCATION = url;
        SERVICESOAPSERVICE_EXCEPTION = e;
    }

    public ServiceSoapService() {
        super(__getWsdlLocation(), SERVICESOAPSERVICE_QNAME);
    }

    public ServiceSoapService(WebServiceFeature... features) {
        super(__getWsdlLocation(), SERVICESOAPSERVICE_QNAME, features);
    }

    public ServiceSoapService(URL wsdlLocation) {
        super(wsdlLocation, SERVICESOAPSERVICE_QNAME);
    }

    public ServiceSoapService(URL wsdlLocation, WebServiceFeature... features) {
        super(wsdlLocation, SERVICESOAPSERVICE_QNAME, features);
    }

    public ServiceSoapService(URL wsdlLocation, QName serviceName) {
        super(wsdlLocation, serviceName);
    }

    public ServiceSoapService(URL wsdlLocation, QName serviceName, WebServiceFeature... features) {
        super(wsdlLocation, serviceName, features);
    }

    /**
     * 
     * @return
     *     returns ServiceSoap
     */
    @WebEndpoint(name = "ServiceSoapPort")
    public ServiceSoap getServiceSoapPort() {
        return super.getPort(new QName("http://service/", "ServiceSoapPort"), ServiceSoap.class);
    }

    /**
     * 
     * @param features
     *     A list of {@link javax.xml.ws.WebServiceFeature} to configure on the proxy.  Supported features not in the <code>features</code> parameter will have their default values.
     * @return
     *     returns ServiceSoap
     */
    @WebEndpoint(name = "ServiceSoapPort")
    public ServiceSoap getServiceSoapPort(WebServiceFeature... features) {
        return super.getPort(new QName("http://service/", "ServiceSoapPort"), ServiceSoap.class, features);
    }

    private static URL __getWsdlLocation() {
        if (SERVICESOAPSERVICE_EXCEPTION!= null) {
            throw SERVICESOAPSERVICE_EXCEPTION;
        }
        return SERVICESOAPSERVICE_WSDL_LOCATION;
    }

}