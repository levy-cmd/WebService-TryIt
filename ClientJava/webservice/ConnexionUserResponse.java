
package webservice;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;

@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "connexionUserResponse", propOrder = {
    "_return"
})
public class ConnexionUserResponse {

    @XmlElement(name = "return")
    protected boolean _return;

    public boolean isReturn() {
        return _return;
    }

    public void setReturn(boolean value) {
        this._return = value;
    }

}
