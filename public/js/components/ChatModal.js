/** @jsx React.DOM */

var ChatModal = React.createClass({
  getInitialState: function () {
    return {
      show: false
    };
  },
  getDefaultProps: function () {
    return {
      messages: [],
      chatCircleId: null,
      successFn: function(){},
      failFn: function(){}
    };
  },
  show: function (chatCircleId, successFn, failFn) {
    console.log(chatCircleId);
    this.setProps({chatCircleId: chatCircleId});
    if(successFn){
      this.setProps({successFn:successFn});
    }
    if(failFn){
      this.setProps({failFn:failFn});
    }
    this.setState({show: true});
  },
  hide: function () {
    this.setState({show: false});
  },
  addMessage: function (e) {
    console.log('adding message!');
    var _this = this;
    var value = this.refs.messageInput.getValue();
    if(value) {
      var data = {chatCircleId:_this.props.chatCircleId,
                  message: value};
      $.post(app.config.rootUrl + 'postMessage', data, function (data) {
        _this.props.successFn(data);
        _this.hide();
      }).fail(function(data){
        _this.props.failFn(data);
        alert('Failure!  Please try to submit your message again.');
      });
    } else {
      alert('Please input a message!');
    }
  },
  updateMessages: function (messages) {
    this.setProps({messages: messages});
  },
  render: function () {
    return (
      <div>
        {(this.state.show)?
          <Modal className="chat-modal" title="Leave a Message Here!" animation={true} onRequestHide={this.hide}>
            <div className="chat-modal_body modal-body">
              {this.props.messages.map(function (message) {
                return (<Row>
                          <Col xs={3} className="messenger">Anonymous says:</Col>
                          <Col xs={9} className="message">{message.message}</Col>
                        </Row>);
              })}
            </div>
            <div className="chat-modal_footer modal-footer">
              <Row>
                <Col xs={9}>
                  <Input ref="messageInput" type="text" help="Enter in your anonymous message"/>
                </Col>
                <Col xs={3}>
                  <Button bsStyle="primary" className="form-control" onClick={this.addMessage}>Submit <i className="fa fa-send-o"></i></Button>
                </Col>
              </Row>
            </div>
          </Modal>
          : null}
      </div>
    );
  }
});
