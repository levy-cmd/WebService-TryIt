
package webservice;

import java.util.ArrayList;
import java.util.List;
import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;


@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "listerAdminsResponse", propOrder = {
    "_return"
})
public class ListerAdminsResponse {

    @XmlElement(name = "return")
    protected List<Personne> _return;

    public List<Personne> getReturn() {
        if (_return == null) {
            _return = new ArrayList<Personne>();
        }
        return this._return;
    }

}
