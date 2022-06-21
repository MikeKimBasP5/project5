import { StyleSheet, Text, View } from 'react-native';

const App = () => {
  return (
    <View style={styles.container}>
      <Text style={styles.header}>About</Text>
      <Text style={styles.text}>This application is made to track exercises and get information about exercises.</Text>
      <Text></Text>
      <Text style={styles.text}>For information you can contact Summa-ICT</Text>
      <Text style={styles.version}> v0.0.1</Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#e9f7f7',
    alignItems: 'center',
  },
  header: {
    marginTop: 50,
    fontSize: 40,
    color: 'black',
  },
  text: {
    top: '5%',
    textAlign: 'center',
    color: 'black',
    fontSize: 30,
  },
  version: {
    top: '48%',
    left: '35%',
    textAlign: 'center',
    color: 'black',
    fontSize: 30,
  },
});

export default App;